<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {


	public function index()
	{
	}

	public function team_card($id){
		if (isset($_COOKIE['login']) && $this->user_model->checkCookieUser($_COOKIE['login'])) {
			$data['equipe'] =  $this->team_model->selectTeamById($id);
			$data['allplayer'] = $this->team_model->selectAllPlayer($id);
			$this->load->view('layout/header');
			$this->load->view('team/team_card', $data);
			$this->load->view('layout/footer');
    }
    else{
        $this->load->view('connexion/connexion');
    }
	}

  public function create_link(){
		if (isset($_COOKIE['login']) && $this->user_model->checkCookieUser($_COOKIE['login'])) {
			$data['action'] = "create_team";
			$this->load->view('layout/header');
			$this->load->view('team/create_team', $data);
			$this->load->view('layout/footer');
    }
    else{
        $this->load->view('connexion/connexion');
    }
  }

  public function create_team(){
		if (isset($_COOKIE['login']) && $this->user_model->checkCookieUser($_COOKIE['login'])) {
			$teamId = $this->team_model->getLastteamId();
			$id = ($teamId[0]->id_equipe) + 1;

			$data = array(
							"id_equipe" => $id,
							"nom_equipe" => htmlspecialchars($_POST['nom_equipe']),
							"adresse_equipe" => htmlspecialchars($_POST['adresse_equipe']),
							"ville_equipe" => htmlspecialchars($_POST['ville_equipe']),
							"code_p_equipe" => htmlspecialchars($_POST['code_p_equipe']),
							"stade_equipe" => htmlspecialchars($_POST['stade_equipe']),
			);

			$this->team_model->insert($data);
			header('location:  ' . site_url("team/team_card/$id"));
    }
    else{
        $this->load->view('connexion/connexion');
    }
  }

	public function modify_link($id) {
		if (isset($_COOKIE['login']) && $this->user_model->checkCookieUser($_COOKIE['login'])) {
			$data['equipe'] = $this->team_model->selectTeamById($id);
			$data['action'] = "edit_team";
			$this->load->view('layout/header');
			$this->load->view('team/create_team',$data);
			$this->load->view('layout/footer');
    }
    else{
        $this->load->view('connexion/connexion');
    }
  }

	public function edit_team() {
		if (isset($_COOKIE['login']) && $this->user_model->checkCookieUser($_COOKIE['login'])) {
			$data = array(
	      "id_equipe" => $id,
	      "nom_equipe" => htmlspecialchars($_POST['nom_equipe']),
	      "adresse_equipe" => htmlspecialchars($_POST['adresse_equipe']),
	      "ville_equipe" => htmlspecialchars($_POST['ville_equipe']),
	      "code_p_equipe" => htmlspecialchars($_POST['code_p_equipe']),
	      "stade_equipe" => htmlspecialchars($_POST['stade_equipe']),
	    );
			$id = $_POST['id_equipe'];
			$this->team_model->update($id, $data);
			header('location:  ' . site_url("team/team_card/$id"));
    }
    else{
        $this->load->view('connexion/connexion');
    }
  }

	public function delete_team($id) {
      $this->team_model->delete($id);
      header('location:  ' . site_url("player"));
    }
}
