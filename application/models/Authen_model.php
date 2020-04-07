<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authen_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  public function login($username,$password){
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $query = $this->db->get('user_db');
    $row = $query->num_rows();
    if($row != 1){
      return false;
    }
    return $query->row_array();
  }
}

/* End of file Authen_model.php */
/* Location: ./application/models/Authen_model.php */