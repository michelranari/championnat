<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team_model extends CI_Model{

  protected $table = 'equipe';

  public function selectAll() {
    $this->load->database();
    return $this->db->select('*')
                    ->from('equipe')
                    ->get()
                    ->result();
  }

  public function selectMatchTeamByID($id_equipe){
    $this->load->database();
    return $this->db->select('nom_equipe,stade_equipe')
                    ->from('equipe')
                    ->where('id_equipe', $id_equipe)
                    ->get()
                    ->result();
  }

  public function selectTeamById($id_equipe) {
    $this->load->database();
    return $this->db->select('*')
                    ->from('equipe')
                    ->where('id_equipe', $id_equipe)
                    ->get()
                    ->result();
  }

  public function selectAllPlayer($id_equipe){
    $this->load->database();
    return $this->db->select('*')
                    ->from('joueur')
                    ->where('id_equipe', $id_equipe)
                    ->get()
                    ->result();
  }

  public function selectAllbyTeam($id_equipe){
      $this->load->database();
      return $this->db->select('*')
                    ->from('equipe')
                    ->where('id_equipe', $id_equipe)
                    ->get()
                    ->result();
  }

  public function getLastTeamId() {
    $this->load->database();
    return $this->db->select('id_equipe')
                    ->from('equipe')
                    ->order_by('id_equipe', 'desc')
                    ->limit(1)
                    ->get()
                    ->result();
  }

  public function getRanking(){
    $this->load->database();
    return $this->db->select('*')
                  ->from('equipe')
                  ->order_by('point', 'DESC')
                  ->get()
                  ->result();
  }


    public function insert($data){
      $this->load->database();
      return $this->db->set('id_equipe', $data['id_equipe'])
                      ->set('nom_equipe', $data['nom_equipe'])
                      ->set('adresse_equipe', $data['adresse_equipe'])
                      ->set('ville_equipe', $data['ville_equipe'])
                      ->set('code_p_equipe', $data['code_p_equipe'])
                      ->set('stade_equipe', $data['stade_equipe'])
                      ->set('but_marque', 0)
                      ->set('but_encaisse', 0)
                      ->set('difference_but', 0)
                      ->set('nb_victoire',0)
                      ->set('nb_defaite',0)
                      ->set('nb_nul', 0)
                      ->set('point', 0)
                      ->insert($this->table);
    }

    public function update($id, $data){
      $this->load->database();
      return $this->db->set('nom_equipe', $data['nom_equipe'])
                      ->set('adresse_equipe', $data['adresse_equipe'])
                      ->set('ville_equipe', $data['ville_equipe'])
                      ->set('code_p_equipe', $data['code_p_equipe'])
                      ->set('stade_equipe', $data['stade_equipe'])
                      ->where('id_equipe', (int)$id)
                      ->update($this->table);
    }

    public function update_stat($id, $data){
      $this->load->database();
      return $this->db->set('but_marque', $data['but_marque'])
                      ->set('but_encaisse', $data['but_encaisse'])
                      ->set('difference_but', $data['difference_but'])
                      ->set('nb_victoire', $data['nb_victoire'])
                      ->set('nb_defaite', $data['nb_defaite'])
                      ->set('nb_nul', $data['nb_nul'])
                      ->set('point', $data['point'])
                      ->where('id_equipe', (int)$id)
                      ->update($this->table);
    }

    public function delete($id){
      $this->load->database();
      return $this->db->where('id_equipe',$id)
                      ->delete($this->table);
    }

    public function nbTeam(){
      $this->load->database();
      return $this->db->select('count(*)')
                      ->from('equipe')
                      ->get()
                      ->result();
    }

}
