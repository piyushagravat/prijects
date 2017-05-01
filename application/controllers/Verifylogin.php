<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {
   $this->load->library('form_validation');

   $this->form_validation->set_rules('email', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     $this->load->view('login');
   }
   else
   { 
     redirect(base_url().'welcome', 'refresh');
   }

 }

 function check_database($password)
 {
   
   $email = $this->input->post('email');

   $result = $this->user->login($email, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
		     'role' => $row->role,
         'email' => $row->email,
		     'password' => $row->password,
		     'name' => $row->first_name." ".$row->last_name,
		     'created_date' => $row->created_date,
       );
       
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Please Enter Valid Username And Password.');
     return false;
   }
 }
}
?>