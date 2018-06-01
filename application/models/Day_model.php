<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Day_model extends CI_Model{

  protected $table = 'journee';

  public function selectAll() {
    $this->load->database();
    return $this->db->select('*')
                    ->from('journee')
                    ->get()
                    ->result();
  }

  public function selectById($id){
    $this->load->database();
    return $this->db->select('*')
                    ->from('journee')
                    ->where('id_journee', $id)
                    ->get()
                    ->result();
  }

  public function getLastJournee() {
    $this->load->database();
    return $this->db->select('id_journee')
                    ->from('journee')
                    ->order_by('id_journee', 'desc')
                    ->limit(1)
                    ->get()
                    ->result();
  }

  public function multipleInsert($data){
    $last = $data['last'];
    $nbDay = $data['nbDay'];
    $this->load->database();
    $data=array();
    for ($i = 1; $i < $nbDay + 1 ; $i++)
    {
       $libelle = "Journée ";
       $temp=array();
       $temp['id_journee'] = $last + $i; //actual value
       $temp['libelle'] =  $libelle . ($last + $i); //actual value
       array_push($data,$temp);
    }
    return $this->db->insert_batch('journee', $data);
  }


}
