<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Championship extends CI_Controller {

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

  public function create_day($nbDay){
    $last = $this->day_model->getLastJournee();
    $nbDay = (int)$_POST['create_day'];
    $data = array("last" => $last[0]->id_journee,"nbDay" => $nbDay);
    $this->day_model->multipleInsert($data);
    header('location:  ' . site_url("Day"));
  }


}
