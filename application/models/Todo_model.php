<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class todo_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

 public function save($data){
  $this->db->insert('todo_db', $data);
  return true;
 }

 public function get(){
  $this->db->where('status',1);
  $this->db->order_by('alert_datetime','DESC');
  $query = $this->db->get('todo_db');
  $row = $query->num_rows();
  if($row == 0){
    return false;
  }else{
    return $query;
  }
 }


 public function get_by_id($id){
  $this->db->where('todo_id',$id);
  $query = $this->db->get('todo_db');
  $row = $query->num_rows();
  if($row != 1){
    return false;
  }else{
    return $query->row_array();
  }

 }

 public function update($id,$data_update){
  $this->db->where('todo_id',$id);
  $this->db->set($data_update);
  $query = $this->db->update('todo_db');
  return true;
 }

 public function delete($id){
  $this->db->where('todo_id',$id);
  $this->db->set('status',2);
  $this->db->update('todo_db');
  return true;
 }


}

