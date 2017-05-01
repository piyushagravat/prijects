<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bill extends CI_Controller {


private $limit = 20;

	function __construct()

	{
		parent::__construct();
		$this->load->model('user','',TRUE);
		$this->load->model("Billmodel");
		$this->load->helper(array('form', 'url'));
    	$this->load->library('form_validation');
	}

	public function index()
	{
		
		
	}
	public function add()
	{
		
		$session_data = $this->session->userdata('logged_in');
		$data['email'] = $session_data['email'];
		$data['session_data'] = $session_data;
		$data['title'] = 'Bill';
		$data['action'] = "Add Bill";
		$data['customerlist']=$this->Billmodel->get_customer_list();
		
	
		$this->load->view('header',$data);
		$this->load->view('bill/add',$data);
		$this->load->view('footer');
	}
	public function addrecord()
	{
		
        $this->form_validation->set_rules('pid', 'Package Name', 'required');
		$this->form_validation->set_rules('amount', 'Amount', 'required');	
		$this->form_validation->set_rules('status', 'Status', 'required');	
		$this->form_validation->set_rules('entrydate', 'Submit Date', 'required');	
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->add();
		}	
		else
		{	
			
			$data = array(   
						'cid' => $this->input->post('cid'),
						'pid' => $this->input->post('pid'),
						'amount' => $this->input->post('amount'),
						'status' => $this->input->post('status'),
						'entrydate' => $this->input->post('entrydate'),
					);   
		
		$id = $this->Billmodel->save($data);	
		$this->session->set_flashdata("message", "Record Added Successfully..."); 				
		redirect('welcome','refresh');	
		
		}
	}
	
}
