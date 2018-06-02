<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Match_model extends CI_Model{

  protected $table = 'match';

  public function selectAll() {
    $this->load->database();
    return $this->db->select('*')
                    ->from('match')
                    ->get()
                    ->result();
  }

  public function nbMatch(){
    $this->load->database();
    return $this->db->select('count(*) as nb_match')
                    ->from('match')
                    ->get()
                    ->result();
  }

  public function calendar(){
    $this->load->database();
    return $this->db->select('id_match,joue,j.id_journee,date_match,libelle,e1.nom_equipe as equipe1, e2.nom_equipe as equipe2,score1,score2')
                    ->from('match m')
                    ->join('equipe e1', "m.id_equipe = e1.id_equipe")
                    ->join('journee j', "j.id_journee = m.id_journee")
                    ->join('equipe e2', "m.id_equipe_deplacer = e2.id_equipe")
                    ->order_by("id_journee", "asc")
                    ->get()
                    ->result();
  }

  public function getLastMatch() {
    $this->load->database();
    return $this->db->select('id_match')
                    ->from('match')
                    ->order_by('id_match', 'desc')
                    ->limit(1)
                    ->get()
                    ->result();
  }

  public function selectMatchById($id) {
    $this->load->database();
    return $this->db->select('*')
                    ->from('match')
                    ->where('id_match', $id)
                    ->get()
                    ->result();
  }

  public function selectIdMatch($id) {

  }

  public function countGoalTeam($id){
    $this->load->database();
    return $this->db->select('count(*) as but')
                    ->from('match')
                    ->join('marquer_but','match.id_match = marquer_but.id_match')
                    ->join('joueur','joueur.id_joueur = marquer_but.id_joueur')
                    ->where('joueur.id_equipe', $id)
                    ->get()
                    ->result();
  }

    public function insert($data){
      $this->load->database();
      return $this->db->set('id_match', $data['id_match'])
                      ->set('date_match', $data['date_match'])
                      ->set('id_journee', $data['id_journee'])
                      ->set('id_equipe', $data['id_equipe'])
                      ->set('id_equipe_deplacer', $data['id_equipe_deplacer'])
                      ->set('joue', false)
                      ->set('score1', 0)
                      ->set('score2', 0)
                      ->insert($this->table);
    }

    public function update($id, $data){

    }

    public function delete($id){
      $this->load->database();
      return $this->db->where('id_joueur',$id)
                      ->delete($this->table);
    }
}
