<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

public function __construct()
  {
    parent::__construct();

    $this->load->model('user_model');
 }


 public function create(){
 	$this->load->view('user/create');
 }


 public function save(){

 	$data_insert = array(
 		'username'	=> $this->input->post('username'),
 		'password'	=> $this->input->post('password'),
 		'name'	=> $this->input->post('name'),
 		'email'		=> $this->input->post('email'),
 		'tel'		=> $this->input->post('tel'),
 		'create_at'	=> date('Y-m-d H:i:s'),
 		'postion'	=> 2
 	);

	$this->user_model->save($data_insert);
	redirect('authen','refresh');


 	
 }
 
}
