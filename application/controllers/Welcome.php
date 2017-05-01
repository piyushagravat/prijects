<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


private $limit = 20;

	function __construct()

	{
		parent::__construct();
			$this->load->model('user','',TRUE);
	}

	public function index()
	{
		
			if($this->session->userdata('logged_in'))
		   {
			 $session_data = $this->session->userdata('logged_in');
			 $data['email'] = $session_data['email'];
			 $data['session_data'] = $session_data;
			 if($session_data["role"] == "Super Admin") { 
				 
			 } 
			 else if($session_data["role"] == "Admin") { 
					 
			 }
			 
			 $this->load->view('header',$data);
			 $this->load->view('welcome_message',$data);
			 $this->load->view('footer');
		   }
		   else
		   {
				 redirect(base_url().'login', 'refresh');
		   }
	}

	function logout()
	{
	   $this->session->unset_userdata('logged_in');
	   redirect(base_url().'login', 'refresh');
	}
}
