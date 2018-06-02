<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Player extends CI_Controller {


	public function index(){
		if (isset($_COOKIE['login']) && $this->user_model->checkCookieUser($_COOKIE['login'])) {
			$data['joueur'] =  $this->player_model->getListPlayer();
			$this->load->view('layout/header');
			$this->load->view('player/list_player', $data);
			$this->load->view('layout/footer');
    }
    else{
        $this->load->view('connexion/connexion');
    }
	}

	public function player_card($id){
		if (isset($_COOKIE['login']) && $this->user_model->checkCookieUser($_COOKIE['login'])) {
			$joueur =  $this->player_model->selectById($id);
			$data['joueur'] = $joueur;
			$data['equipe'] = $this->team_model->selectTeamById($joueur[0]->id_equipe);
			$this->load->view('layout/header');
			$this->load->view('player/player_card', $data);
			$this->load->view('layout/footer');
    }
    else{
        $this->load->view('connexion/connexion');
    }
	}

  public function create_link(){
		if (isset($_COOKIE['login']) && $this->user_model->checkCookieUser($_COOKIE['login'])) {
			$data['action'] = "create_player";
			$data['equipe'] = $this->team_model->selectAll();
			$this->load->view('layout/header');
			$this->load->view('player/create_player', $data);
			$this->load->view('layout/footer');
    }
    else{
        $this->load->view('connexion/connexion');
    }
  }

  public function create_player(){

		if (isset($_COOKIE['login']) && $this->user_model->checkCookieUser($_COOKIE['login'])) {
			$playerId = $this->player_model->getLastPlayerId();
			$id = ($playerId[0]->id_joueur) + 1;

			$data = array(
							"id_joueur" => $id,
							"nom_joueur" => htmlspecialchars($_POST['nom_joueur']),
							"prenom_joueur" => htmlspecialchars($_POST['prenom_joueur']),
							"date_n_joueur" => htmlspecialchars($_POST['date_n_joueur']),
							"poste" => htmlspecialchars($_POST['poste']),
							"num_maillot" => htmlspecialchars($_POST['num_maillot']),
							"num_licence_joueur" => htmlspecialchars($_POST['num_licence_joueur']),
							"id_equipe" => $_POST['equipe'],
			);

			$this->player_model->insert($data);
			header('location:  ' . site_url("Player/player_card/$id"));
    }
    else{
        $this->load->view('connexion/connexion');
    }
  }

	public function modify_link($id) {
		if (isset($_COOKIE['login']) && $this->user_model->checkCookieUser($_COOKIE['login'])) {
			$data['joueur'] = $this->player_model->selectById($id);
			$data['equipe'] = $this->team_model->selectAll();
			$data['action'] = "edit_player";
			$this->load->view('layout/header');
			$this->load->view('player/create_player',$data);
			$this->load->view('layout/footer');
    }
    else{
        $this->load->view('connexion/connexion');
    }
  }

	public function edit_player() {
		if (isset($_COOKIE['login']) && $this->user_model->checkCookieUser($_COOKIE['login'])) {
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
    else{
        $this->load->view('connexion/connexion');
    }
  }


	public function delete_player($id) {
      $this->player_model->delete($id);
      header('location:  ' . site_url("Player"));
    }
}
