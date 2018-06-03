<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Match extends CI_Controller {


	public function index()
	{
		if (isset($_COOKIE['login']) && $this->user_model->checkCookieUser($_COOKIE['login'])) {
			$data['all_match'] = $this->match_model->calendar();
	    $data['nb_match'] =  $this->match_model->nbMatch();
			$this->load->view('layout/header');
	    $this->load->view('championship/calendar', $data);
			$this->load->view('layout/footer');
    }
    else{
        $this->load->view('connexion/connexion');
    }
	}

  public function create_match_link(){
		if (isset($_COOKIE['login']) && $this->user_model->checkCookieUser($_COOKIE['login'])) {
			$data['equipe'] = $this->team_model->selectAll();
			$data['journee'] = $this->day_model->selectAll();
			$data['arbitre'] = $this->referee_model->selectAll();
			$this->load->view('layout/header');
			$this->load->view('match/create_match', $data);
			$this->load->view('layout/footer');
    }
    else{
        $this->load->view('connexion/connexion');
    }
  }

  public function create_match(){

		if (isset($_COOKIE['login']) && $this->user_model->checkCookieUser($_COOKIE['login'])) {
			$matchId = $this->match_model->getLastMatch();
			$id = ($matchId[0]->id_match) + 1;

			$data1 = array(
							"id_match" => $id,
							"date_match" => $_POST['date_match'],
							"id_journee" => $_POST['journee'],
							"id_equipe" => $_POST['equipe1'],
							"id_equipe_deplacer" => $_POST['equipe2'],
			);

			$data2 = array(
							"id_match" => $id,
							"id_arbitre_centre" => $_POST['arbitre_centre'],
							"id_arbitre_touche_1" => $_POST['arbitre_touche_1'],
							"id_arbitre_touche_2" => $_POST['arbitre_touche_2'],
			);

			$this->match_model->insert($data1);
			$this->referee_model->insert_arbitrer($data2);
			header('location:  ' . site_url("Match/match_card/$id"));
    }
    else{
        $this->load->view('connexion/connexion');
    }
  }
	public function edit_match(){
		if (isset($_COOKIE['login']) && $this->user_model->checkCookieUser($_COOKIE['login'])) {

			$id = $_POST['id_match'];
			if (isset($_POST['joue'])) { $joue = true; }else { $joue = false; }

			$match['match'] = $this->match_model->selectMatchById($id);
			$equipe1['equipe1'] = $this->team_model->selectAllByTeam($_POST['equipe1']);
			$equipe2['equipe2'] = $this->team_model->selectAllByTeam($_POST['equipe2']);

			$data1 = array(
							"date_match" => $_POST['date_match'],
							"id_journee" => $_POST['journee'],
							"id_equipe" => $_POST['equipe1'],
							"id_equipe_deplacer" => $_POST['equipe2'],
							"joue" => $joue,
							"score1" => htmlspecialchars($_POST['score1']),
							"score2" => htmlspecialchars($_POST['score2']),
			);

			$data2 = array(
							"id_match" => $id,
							"id_arbitre_centre" => $_POST['arbitre_centre'],
							"id_arbitre_touche_1" => $_POST['arbitre_touche_1'],
							"id_arbitre_touche_2" => $_POST['arbitre_touche_2'],
			);

			$this->match_model->update($id,$data1);
			$this->referee_model->delete_arbitrer_by_match($id);
			$this->referee_model->insert_arbitrer($data2);

			$maj_equipe1 = array();
			$maj_equipe2 = array();

			if(isset($_POST['joue']) && strcmp($match['match'][0]->joue, "f") == 0){

				$maj_equipe1["difference_but"] = $equipe1['equipe1'][0]->difference_but +  $_POST['score1'] - $_POST['score2'];
				$maj_equipe1["but_marque"] = $equipe1['equipe1'][0]->but_marque + $_POST['score1'];
				$maj_equipe1["but_encaisse"] = $equipe1['equipe1'][0]->but_encaisse + $_POST['score2'];

				$maj_equipe2["difference_but"] = $equipe2['equipe2'][0]->difference_but + $_POST['score2'] - $_POST['score1'];
				$maj_equipe2["but_marque"] = $equipe2['equipe2'][0]->but_marque + $_POST['score2'];
				$maj_equipe2["but_encaisse"] = $equipe2['equipe2'][0]->but_encaisse + $_POST['score1'];

				if($_POST['score1'] > $_POST['score2']){

					$maj_equipe1["point"] = $equipe1['equipe1'][0]->point + 3;
					$maj_equipe1["nb_victoire"] = $equipe1['equipe1'][0]->nb_victoire + 1;
					$maj_equipe1["nb_defaite"] = $equipe1['equipe1'][0]->nb_defaite;
					$maj_equipe1["nb_nul"] = $equipe1['equipe1'][0]->nb_nul;

					$maj_equipe2["point"] = $equipe2['equipe2'][0]->point;
					$maj_equipe2["nb_defaite"] = $equipe2['equipe2'][0]->nb_defaite + 1;
					$maj_equipe2["nb_victoire"] = $equipe2['equipe2'][0]->nb_victoire;
					$maj_equipe2["nb_nul"] = $equipe2['equipe2'][0]->nb_nul;

				}else{
					$maj_equipe1["point"] = $equipe1['equipe1'][0]->point + 1;
					$maj_equipe1["nb_victoire"] = $equipe1['equipe1'][0]->nb_victoire;
					$maj_equipe1["nb_defaite"] = $equipe1['equipe1'][0]->nb_defaite;
					$maj_equipe1["nb_nul"] = $equipe1['equipe1'][0]->nb_nul + 1;

					$maj_equipe2["point"] = $equipe2['equipe2'][0]->point + 1;
					$maj_equipe2["nb_defaite"] = $equipe2['equipe2'][0]->nb_defaite;
					$maj_equipe2["nb_victoire"] = $equipe2['equipe2'][0]->nb_victoire;
					$maj_equipe2["nb_nul"] = $equipe2['equipe2'][0]->nb_nul + 1;

				}

			// par defaut
			}else{
				$maj_equipe1["difference_but"] =   $_POST['score1'] - $_POST['score2'];
				$maj_equipe1["but_marque"] =  $_POST['score1'];
				$maj_equipe1["but_encaisse"] =  $_POST['score2'];

				$maj_equipe2["difference_but"] = $_POST['score2'] - $_POST['score1'];
				$maj_equipe2["but_marque"] =  $_POST['score2'];
				$maj_equipe2["but_encaisse"] =  $_POST['score1'];

				$maj_equipe1["point"] = $equipe1['equipe1'][0]->point ;
				$maj_equipe1["nb_victoire"] = $equipe1['equipe1'][0]->nb_victoire;
				$maj_equipe1["nb_defaite"] = $equipe1['equipe1'][0]->nb_defaite;
				$maj_equipe1["nb_nul"] = $equipe1['equipe1'][0]->nb_nul;

				$maj_equipe2["point"] = $equipe2['equipe2'][0]->point;
				$maj_equipe2["nb_defaite"] = $equipe2['equipe2'][0]->nb_defaite ;
				$maj_equipe2["nb_victoire"] = $equipe2['equipe2'][0]->nb_victoire;
				$maj_equipe2["nb_nul"] = $equipe2['equipe2'][0]->nb_nul;
			}


			// ---- cas ou le match a déja été joué et que l'on veut modifier les stats ( à compléter)

			// }else{
			// 		$maj_equipe1["but_marque"] = $equipe1['equipe1'][0]->but_marque + $match['match'][0]->score1 + ($_POST['score1'] - $match['match'][0]->score1);
			// 		$maj_equipe2["but_marque"] =  $equipe2['equipe2'][0]->but_marque +$match['match'][0]->score2 + ($_POST['score2'] - $match['match'][0]->score2);
			//
			// 		$maj_equipe1["but_encaisse"] = $equipe1['equipe1'][0]->but_encaisse + ($_POST['score2'] - $match['match'][0]->score2);
			// 		$maj_equipe2["but_encaisse"] = $equipe2['equipe2'][0]->but_encaisse + ($_POST['score1'] - $match['match'][0]->score1);
			//
			// 		$maj_equipe1["difference_but"] = $equipe1['equipe1'][0]->difference_but + $match['match'][0]->score2 - $_POST['score2'];
			// 		$maj_equipe2["difference_but"] = $equipe2['equipe2'][0]->difference_but + $match['match'][0]->score1 - $_POST['score1'];
			//
			// 		if( ($match['match'][0]->score1 > $match['match'][0]->score2) ){
			// 			if( ($_POST['score1'] < $_POST['score2']) ){
			// 				$maj_equipe1["point"] = $equipe1['equipe1'][0]->point - 3;
			// 				$maj_equipe1["nb_victoire"] = $equipe1['equipe1'][0]->nb_victoire - 1;
			// 				$maj_equipe1["nb_defaite"] = $equipe1['equipe1'][0]->nb_defaite + 1;
			// 				$maj_equipe1["nb_nul"] = $equipe1['equipe1'][0]->nb_nul;
			//
			// 				$maj_equipe2["point"] = $equipe2['equipe2'][0]->point + 3;
			// 				$maj_equipe2["nb_victoire"] = $equipe2['equipe2'][0]->nb_victoire + 1;
			// 				$maj_equipe2["nb_defaite"] = $equipe2['equipe2'][0]->nb_defaite - 1;
			// 				$maj_equipe2["nb_nul"] = $equipe2['equipe2'][0]->nb_nul;
			//
			// 			}elseif(($_POST['score1'] == $_POST['score2'])){
			// 				$maj_equipe1["point"] = $equipe1['equipe1'][0]->point - 2;
			// 				$maj_equipe1["nb_victoire"] = $equipe1['equipe1'][0]->nb_victoire - 1;
			// 				$maj_equipe1["nb_defaite"] = $equipe1['equipe1'][0]->nb_defaite;
			// 				$maj_equipe1["nb_nul"] = $equipe1['equipe1'][0]->nb_nul + 1;
			//
			// 				$maj_equipe2["point"] = $equipe2['equipe2'][0]->point + 2;
			// 				$maj_equipe2["nb_defaite"] = $equipe2['equipe2'][0]->nb_defaite - 1;
			// 				$maj_equipe1["nb_victoire"] = $equipe2['equipe2'][0]->nb_victoire;
			// 				$maj_equipe2["nb_nul"] = $equipe2['equipe2'][0]->nb_nul + 1;
			// 			}
			//
			// 		}elseif( ($match['match'][0]->score1 < $match['match'][0]->score2)){
			// 			if(($_POST['score1'] > $_POST['score2'])){
			// 			$maj_equipe1["point"] = $equipe1['equipe1'][0]->point + 3;
			// 			$maj_equipe1["nb_victoire"] = $equipe1['equipe1'][0]->nb_victoire + 1;
			// 			$maj_equipe1["nb_defaite"] = $equipe1['equipe1'][0]->nb_defaite - 1;
			// 			$maj_equipe1["nb_nul"] = $equipe1['equipe1'][0]->nb_nul;
			//
			// 			$maj_equipe2["point"] = $equipe2['equipe2'][0]->point - 3;
			// 			$maj_equipe2["nb_victoire"] = $equipe2['equipe2'][0]->nb_victoire - 1;
			// 			$maj_equipe2["nb_defaite"] = $equipe2['equipe2'][0]->nb_defaite + 1 ;
			// 			$maj_equipe2["nb_nul"] = $equipe2['equipe2'][0]->nb_nul;
			//
			// 			}elseif(($_POST['score1'] == $_POST['score2'])){
			// 				$maj_equipe1["point"] = $equipe1['equipe1'][0]->point + 2;
			// 				$maj_equipe1["nb_defaite"] = $equipe1['equipe1'][0]->nb_defaite -1 ;
			// 				$maj_equipe1["nb_victoire"] = $equipe1['equipe1'][0]->nb_victoire;
			// 				$maj_equipe1["nb_nul"] = $equipe1['equipe1'][0]->nb_nul + 1;
			//
			// 				$maj_equipe2["point"] = $equipe2['equipe2'][0]->point - 2;
			// 				$maj_equipe2["nb_victoire"] = $equipe2['equipe2'][0]->nb_victoire - 1;
			// 				$maj_equipe2["nb_defaite"] = $equipe2['equipe2'][0]->nb_defaite;
			// 				$maj_equipe2["nb_nul"] = $equipe2['equipe2'][0]->nb_nul + 1;
			//
			// 			}
			// 		}else{
			// 			$maj_equipe1["point"] = $equipe1['equipe1'][0]->point;
			// 			$maj_equipe1["nb_defaite"] = $equipe1['equipe1'][0]->nb_defaite;
			// 			$maj_equipe1["nb_victoire"] = $equipe1['equipe1'][0]->nb_victoire;
			// 			$maj_equipe1["nb_nul"] = $equipe1['equipe1'][0]->nb_nul;
			//
			// 			$maj_equipe2["point"] = $equipe2['equipe2'][0]->point;
			// 			$maj_equipe2["nb_victoire"] = $equipe2['equipe2'][0]->nb_victoire;
			// 			$maj_equipe2["nb_defaite"] = $equipe2['equipe2'][0]->nb_defaite;
			// 			$maj_equipe2["nb_nul"] = $equipe2['equipe2'][0]->nb_nul;
			//
			// 		}


			$this->team_model->update_stat($_POST['equipe1'],$maj_equipe1);
			$this->team_model->update_stat($_POST['equipe2'],$maj_equipe2);

			header('location:  ' . site_url("Match/match_card/$id"));
		}else {
			  $this->load->view('connexion/connexion');
		}
	}

	public function edit_match_link($id){
		if (isset($_COOKIE['login']) && $this->user_model->checkCookieUser($_COOKIE['login'])) {

			$data['match'] = $this->match_model->selectMatchById($id);
			$data['equipe_dom'] = $this->team_model->selectMatchTeamByID($data['match'][0]->id_equipe);
			$data['equipe_ext'] = $this->team_model->selectMatchTeamByID($data['match'][0]->id_equipe_deplacer);;
			$data['journee'] = $this->day_model->selectById($data['match'][0]->id_journee);
			$data['arbitre'] = $this->referee_model->selectRefereeByMatch($id);
			$data['all_arbitre'] = $this->referee_model->selectAll();
			$data['all_journee'] = $this->day_model->selectAll();

			$this->load->view('layout/header');
			$this->load->view('match/modif_card_match', $data);
			$this->load->view('layout/footer');

    }else{
        $this->load->view('connexion/connexion');
    }
	}

  public function match_card($id){

		if (isset($_COOKIE['login']) && $this->user_model->checkCookieUser($_COOKIE['login'])) {
			$data['match'] = $this->match_model->selectMatchById($id);
			$data['equipe_dom'] = $this->team_model->selectMatchTeamByID($data['match'][0]->id_equipe);
			$data['equipe_ext'] = $this->team_model->selectMatchTeamByID($data['match'][0]->id_equipe_deplacer);;
			$data['journee'] = $this->day_model->selectById($data['match'][0]->id_journee);
			$data['arbitre'] = $this->referee_model->selectRefereeByMatch($id);
			$this->load->view('layout/header');
			$this->load->view('match/match_card', $data);
			$this->load->view('layout/footer');
    }
    else{
        $this->load->view('connexion/connexion');
    }
  }

	public function delete_match($id) {
      $this->match_model->delete($id);
      header('location:  ' . site_url("Player"));
    }
}
