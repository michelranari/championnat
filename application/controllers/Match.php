<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Match extends CI_Controller {


	public function index()
	{
	}

  public function create_match_link(){
		$data['equipe'] = $this->team_model->selectAll();
    $data['journee'] = $this->day_model->selectAll();
    $data['arbitre'] = $this->referee_model->selectAll();
    $this->load->view('match/create_match', $data);
  }

  public function create_match(){

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

  public function match_card($id){
    $data['match'] = $this->match_model->selectMatchById($id);
		$data['equipe_dom'] = $this->team_model->selectMatchTeamByID($data['match'][0]->id_equipe);
		$data['equipe_ext'] = $this->team_model->selectMatchTeamByID($data['match'][0]->id_equipe_deplacer);;
		$data['score_dom'] = $this->match_model->countGoalTeam($data['match'][0]->id_equipe);
		$data['score_ext'] = $this->match_model->countGoalTeam($data['match'][0]->id_equipe_deplacer);
		$data['journee'] = $this->day_model->selectById($data['match'][0]->id_journee);
		$data['arbitre'] = $this->referee_model->selectRefereeByMatch($id);
		$this->load->view('match/match_card', $data);
  }

	public function modify_link($id) {

  }

	public function edit_player() {
		$data = array(
            "nom_joueur" => htmlspecialchars($_POST['nom_joueur']),
            "prenom_joueur" => htmlspecialchars($_POST['prenom_joueur']),
            "date_n_joueur" => htmlspecialchars($_POST['date_n_joueur']),
            "poste" => htmlspecialchars($_POST['poste']),
            "num_maillot" => htmlspecialchars($_POST['num_maillot']),
            "num_licence_joueur" => htmlspecialchars($_POST['num_licence_joueur']),
            "id_equipe" => $_POST['equipe'],
    );
		$id = $_POST['id_joueur'];
		$this->player_model->update($id, $data);
		header('location:  ' . site_url("Player/player_card/$id"));
  }


	public function delete_player($id) {
      $this->player_model->delete($id);
      header('location:  ' . site_url("Player"));
    }
}
