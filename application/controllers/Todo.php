<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends CI_Controller {

	
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

	public function create()
	{
		$data['data_user'] = $this->data_user;
		$this->load->view('todo/create',$data);
	}

  public function save(){

    $datatime =  date("Y-m-d H:i:s", strtotime($this->input->post('alert_datetime'))); 
    $data_user = $this->data_user;
    $data_insert  = array('user_id' => $data_user['id'],
          'topic' => $this->input->post('topic'),
          'alert_datetime'  => $datatime,
          'status'  => 1,
          'create_at' => date('Y-m-d H:i:s'),
          'update_at' => date('Y-m-d H:i:s')
      );
    $this->todo_model->save($data_insert);
    redirect('home','refresh');

  }

  public function edit($todo_id){
    $data['data_user'] = $this->data_user;
    $data['data_todo'] = $this->todo_model->get_by_id($todo_id);
    $this->load->view('todo/edit',$data);
  }

  public function update(){
    $datatime =  date("Y-m-d H:i:s", strtotime($this->input->post('alert_datetime'))); 
    $data_update = array(
          'topic' => $this->input->post('topic'),
          'alert_datetime'  => $datatime,
          'update_at' => date('Y-m-d H:i:s')
      );

    $this->todo_model->update($this->input->post('todo_id'),$data_update);
     redirect('home','refresh');

  }

  public function delete($id){
    $this->todo_model->delete($id);
    redirect('home','refresh');
  }


}
