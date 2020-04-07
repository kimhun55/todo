<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {


	public function save($data){
		$this->db->insert('user_db',$data);
		return true;
	}

	

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */