<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expance extends CI_Controller {


private $limit = 20;

	function __construct()

	{
		parent::__construct();
			$this->load->model('user','',TRUE);
			$this->load->model("ExpanceModel");
			$this->load->helper(array('form', 'url'));
    		$this->load->library('form_validation');
	}

	public function index()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['email'] = $session_data['email'];
		$data['session_data'] = $session_data;
		$uri_segment = 4;
		$offset = $this->uri->segment($uri_segment);
		
		// load data		
		$viewdata = $this->ExpanceModel->get_paged_list($this->limit, $offset)->result();
		$data["viewdata"] = $viewdata;
		$data['title'] = 'Expance';
		$data['action'] = "All Record";
				
		// generate pagination		
		$this->load->library('pagination');		
		$config['base_url'] = base_url()."expance/index/";
		$config['total_rows'] = $this->ExpanceModel->count_all();
		$config['per_page'] = $this->limit;
		$config['uri_segment'] = $uri_segment;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['message'] = $this->session->flashdata('message');		
		$data["num"] = $this->uri->segment(4);

		$this->load->view('header',$data);
		$this->load->view('expance/all',$data);
		$this->load->view('footer');
		
	}
	public function add()
	{
		
		$session_data = $this->session->userdata('logged_in');
		$data['email'] = $session_data['email'];
		$data['session_data'] = $session_data;
		$data['title'] = 'Expance';
		$data['action'] = "Add Expance";
	
		$this->load->view('header',$data);
		$this->load->view('expance/add',$data);
		$this->load->view('footer');
	}
	public function addrecord()
	{
		$this->form_validation->set_rules('ename', 'Expance Name', 'required');
        $this->form_validation->set_rules('amount', 'Expance Amount', 'required');
        $this->form_validation->set_rules('exp_date', 'Expance Date', 'required');
     
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->add();
		}	
		else
		{	
			
			$data = array(   
						
						'ename' => $this->input->post('ename'),
						'expance_amount' => $this->input->post('amount'),
						'expance_date' => $this->input->post('exp_date')
					);   
			
		$id = $this->ExpanceModel->save($data);	
		$this->session->set_flashdata("message", "Record Added Successfully..."); 				
		redirect('welcome','refresh');	
		
		}
	}

		public function delete($id)
	{
		$this->ExpanceModel->delete($id);		
		$this->session->set_flashdata("message", "Record Deleted Successfully..."); 			
		redirect('expance/','refresh');
	}
	
	public function edit($id)
	{			
		$data["editdata"] = $this->ExpanceModel->get_by_id($id)->row();	

		$session_data = $this->session->userdata('logged_in');
		$data['email'] = $session_data['email'];
		$data['session_data'] = $session_data;				
		$data['title'] = 'Expance';
		$data['action'] = "Edit Record";
		
		
		$this->load->view('header',$data);
		$this->load->view('expance/edit',$data);
		$this->load->view('footer');
	}
	public function updaterecord()
	{
		
		$this->form_validation->set_rules('ename', 'Expance Name', 'required');
        $this->form_validation->set_rules('amount', 'Expance Amount', 'required');
        $this->form_validation->set_rules('exp_date', 'Expance Date', 'required');

                
		if ($this->form_validation->run() == FALSE)
		{
			$this->edit($this->input->post('eid'));
		}	
		else
		{	
				$data = array(                         
                    	'ename' => $this->input->post('ename'),
						'expance_amount' => $this->input->post('amount'),
						'expance_date' => $this->input->post('exp_date')
                );  	
			$id = $this->input->post('eid');		
			$this->ExpanceModel->update($id,$data);	
			$this->session->set_flashdata("message", "Record Updated Successfully..."); 									
			redirect('expance','refresh');	
		}
						
	}
	
}
