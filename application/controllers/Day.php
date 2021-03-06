<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Day extends CI_Controller {

	public function index()
	{
		if (isset($_COOKIE['login']) && $this->user_model->checkCookieUser($_COOKIE['login'])) {
			$data['nbTeam'] = $this->team_model->nbTeam();
			$data['day'] = $this->day_model->selectAll();
			$this->load->view('layout/header');
			$this->load->view('day/gestion_day', $data);
			$this->load->view('layout/footer');
    }
    else{
        $this->load->view('connexion/connexion');
    }
	}

  public function create_day($nbDay){
    $last = $this->day_model->getLastJournee();
    $nbDay = (int)$_POST['create_day'];
    $data = array("last" => $last[0]->id_journee,"nbDay" => $nbDay);
    $this->day_model->multipleInsert($data);
    header('location:  ' . site_url("Day"));

  }


}
