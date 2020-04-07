<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	
	public function __construct()
  {
    parent::__construct();

    $this->data_user = $this->session->userdata('user');

    $this->check_status();

    $this->load->model('todo_model');



  }

  	public $data_user;

  	public function check_status(){
    $data = $this->data_user;
    if($data['status'] !== true){
        echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL='.site_url('authen').'">';
        return TRUE;    
    }
 
  }

	public function index()
	{
		$data['data_user'] = $this->data_user;
    $data['data_table'] = $this->todo_model->get();
		
		$this->load->view('home/index',$data);
	}
}
