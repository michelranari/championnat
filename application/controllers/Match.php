<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Match extends CI_Controller {


	public function index()
	{
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

	public function delete_player($id) {
      $this->player_model->delete($id);
      header('location:  ' . site_url("Player"));
    }
}
