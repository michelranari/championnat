<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class User_model extends CI_Model
{
    protected $table = 'member';

    function checkPasswordByUser($login, $password){
      $result= $this->db
                    ->select()
                    ->from('member')
                    ->where('login',$login)
                    ->where('password',crypt($password,'md5'))
                    ->get()
                    ->result();
      if($result){
          return true;
      }
      else{
        return false;
      }
    }

    function loginIsAvailable($login){
      $result = $this->db
                      ->select('login')
                      ->from('member')
                      ->where('login',$login)
                      ->get()
                      ->result();
      if($result){
          return true;
      }
      else{
          return false;
      }
    }

    function add_user($login, $password){
      return $this->db
                  ->set('login',$login)
                  ->set('login_crypted',crypt($login,'md5'))
                  ->set('password',crypt($password,'md5'))
                  ->insert($this->table);
    }

    function checkCookieUser($login){
      $result = $this->db
                      ->select('login')
                      ->from('member')
                      ->where('login_crypted',$login)
                      ->get()
                      ->result();
      if($result){
         return true;
      }
      else{
          return false;
      }
    }
}
