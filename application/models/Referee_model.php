<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Referee_model extends CI_Model{

  protected $table = 'arbitre';

  public function selectAll() {
    $this->load->database();
    return $this->db->select('*')
                    ->from('arbitre')
                    ->get()
                    ->result();
  }

  public function selectRefereeByMatch($id_match){
    $this->load->database();
    return $this->db->select('arbitrer.id_arbitre,role_arbitre,nom_arbitre,prenom_arbitre')
                    ->from('arbitrer')
                    ->join('arbitre', "arbitre.id_arbitre = arbitre.id_arbitre")
                    ->where('id_match', $id_match)
                    ->get()
                    ->result();
  }

    public function insert($data){
      $this->load->database();

    }

    public function update($id, $data){
      $this->load->database();

    }

    public function insert_arbitrer($data){
      $this->load->database();
      $this->db->set('id_match', $data['id_match'])
                ->set('id_arbitre', $data['id_arbitre_centre'])
                ->set('role_arbitre', 'arbitre centrale')
                ->insert('arbitrer');

      $this->db->set('id_match', $data['id_match'])
                 ->set('id_arbitre', $data['id_arbitre_touche_1'])
                 ->set('role_arbitre', 'arbitre de touche')
                 ->insert('arbitrer');

      $this->db->set('id_match', $data['id_match'])
                ->set('id_arbitre', $data['id_arbitre_touche_2'])
                ->set('role_arbitre', 'arbitre de touche')
                ->insert('arbitrer');
    }

    public function delete($id){
      $this->load->database();
      return $this->db->where('id_arbitre',$id)
                      ->delete($this->table);
    }



}
