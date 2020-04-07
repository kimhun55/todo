<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Authen extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();

    $this->load->library('form_validation');
    $this->load->model('authen_model');

    $this->check_status();
  }


  public $data_user = array();


  public function check_status(){
    $data = $this->session->userdata('user');
    if($data['status'] === true){
        //echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL='.site_url('home').'">';
        return TRUE;
        //exit();    
    }
  
 
  }

  public function index()
  {
    
    //check input
    $submit = $this->input->post('submit');

    if($submit != "ok"){

     $this->load->view('authen/login_form');
      return true;
    }


    //set rule
    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[20]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|callback_login_check');

    //error style
    $this->form_validation->set_error_delimiters('<br><div class="alert alert-danger alert-dismissible fade show" role="alert">', ' <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');



    if ($this->form_validation->run() == FALSE)
    {
        $this->load->view('authen/login_form');
    }else{

   
        $data = $this->data_user;
        $newdata = array(
        'username'  => $data['username'],
        'id'     => $data['id'],
        'name'  => $data['name'],
        'postion' =>$data['postion'],
        'status' => TRUE
        );

        $this->session->set_userdata('user',$newdata);
        redirect('home','refresh');
        return TRUE;

    }
  }

  public function login_check($password)
  {
    $username = $this->input->post('username');

    if($username == "" ){
      $this->form_validation->set_message('login_check', 'ไม่พบข้อมูล username');
      return FALSE;
    }
     if($password == "" ){
      $this->form_validation->set_message('login_check', 'ไม่พบข้อมูล password');
      return FALSE;
    }

    $data = $this->authen_model->login($username,$password);

    if($data === false){
       $this->form_validation->set_message('login_check', 'username หรือ password ผิดไม่พบในระบบ');
      return FALSE;
    }else{
      $this->data_user = $data;
      return true;
    }

  }

  public function logout(){

    $this->session->sess_destroy();
    redirect('authen','refresh');
    //exit();
    //echo index_page();

  }

}


/* End of file Authen.php */
/* Location: ./application/controllers/Authen */