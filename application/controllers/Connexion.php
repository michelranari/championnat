<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connexion extends CI_Controller {

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

  public function try_connexion(){
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    $isUser = $this->user_model->checkPasswordByUser($login, $password);

    if($isUser){
        setcookie('login',crypt($login,'md5'),time()+3600,'/','');
        $data['joueur'] =  $this->player_model->getListPlayer();
        $this->load->view('layout/header');
        $this->load->view('player/list_player', $data);
        $this->load->view('layout/footer');
    }
    else{
        $this->load->view('connexion/connexion_error_view');
    }
  }

  public function try_add_user(){
    if (isset($_COOKIE['login']) && $this->user_model->checkCookieUser($_COOKIE['login'])) {

      $login = htmlspecialchars($_POST['login']);
      $password = htmlspecialchars($_POST['password']);
      if (isset($login) && !($this->user_model->loginIsAvailable($login))) {
          $this->user_model->add_user($login, $password);
          $this->load->view('connexion/connexion');
      }
      else {
          $this->load->view('connexion/add_user');
      }
    }
    else{
        $this->load->view('connexion/connexion');
    }
  }

  public function create_user_link(){
    if (isset($_COOKIE['login']) && $this->user_model->checkCookieUser($_COOKIE['login'])) {
        $this->load->view('connexion/add_user');
    }
    else{
        $this->load->view('connexion/connexion');
    }
  }

  public function disconnect(){
    delete_cookie('login');
    $this->load->view('connexion/connexion');
  }

}
