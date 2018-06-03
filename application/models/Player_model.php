<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Player_model extends CI_Model{

  protected $table = 'joueur';

  public function selectAll() {
    $this->load->database();
    return $this->db->select('*')
                    ->from('joueur')
                    ->get()
                    ->result();
  }

  public function selectById($id) {
    $this->load->database();
    return $this->db->select('*')
                    ->from('joueur')
                    ->where('id_joueur', $id)
                    ->get()
                    ->result();
  }

  public function getListPlayer(){
    $this->load->database();
    return $this->db->select('*')
                  ->from('joueur')
                  ->join('equipe', "joueur.id_equipe = equipe.id_equipe")
                  ->get()
                  ->result();
  }


  public function getLastPlayerId() {
    $this->load->database();
    return $this->db->select('id_joueur')
                    ->from('joueur')
                    ->order_by('id_joueur', 'desc')
                    ->limit(1)
                    ->get()
                    ->result();
  }


    public function insert($data){
      $this->load->database();
      return $this->db->set('id_joueur', $data['id_joueur'])
                      ->set('nom_joueur', $data['nom_joueur'])
                      ->set('prenom_joueur', $data['prenom_joueur'])
                      ->set('date_n_joueur', $data['date_n_joueur'])
                      ->set('poste', $data['poste'])
                      ->set('num_maillot', $data['num_maillot'])
                      ->set('num_licence_joueur', $data['num_licence_joueur'])
                      ->set('id_equipe', $data['id_equipe'])
                      ->insert($this->table);
    }

    public function update($id, $data){
      $this->load->database();
      return $this->db->set('nom_joueur', $data['nom_joueur'])
                      ->set('prenom_joueur', $data['prenom_joueur'])
                      ->set('date_n_joueur', $data['date_n_joueur'])
                      ->set('poste', $data['poste'])
                      ->set('num_maillot', $data['num_maillot'])
                      ->set('num_licence_joueur', $data['num_licence_joueur'])
                      ->set('id_equipe', $data['id_equipe'])
                      ->where('id_joueur', (int)$id)
                      ->update($this->table);
    }

    public function delete($id){
      $this->load->database();
      return $this->db->where('id_joueur',$id)
                      ->delete($this->table);
    }
}
