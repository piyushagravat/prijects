<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {


private $limit = 20;

	function __construct()

	{
		parent::__construct();
		$this->load->model('user','',TRUE);
		$this->load->model("Packagemodel");
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
		$viewdata = $this->Packagemodel->get_paged_list($this->limit, $offset)->result();
		
		$data["viewdata"] = $viewdata;
		$data['title'] = 'Customer';
		$data['action'] = "All Record";
				
		// generate pagination		
		$this->load->library('pagination');		
		$config['base_url'] = base_url()."package/index/";
		$config['total_rows'] = $this->Packagemodel->count_all();
		$config['per_page'] = $this->limit;
		$config['uri_segment'] = $uri_segment;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['message'] = $this->session->flashdata('message');		
		$data["num"] = $this->uri->segment(4);

		$this->load->view('header',$data);
		$this->load->view('package/all',$data);
		$this->load->view('footer');
																																	
	}
	public function add()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['email'] = $session_data['email'];
		$data['session_data'] = $session_data;
		$data['title'] = 'Package';
		$data['action'] = "Add Package";
	
		$this->load->view('header',$data);
		$this->load->view('package/add',$data);
		$this->load->view('footer');
	}
	
	public function addrecord()
	{
		$this->form_validation->set_rules('pname', 'Package Name', 'required');
        $this->form_validation->set_rules('amount', 'Amount', 'required');
		$this->form_validation->set_rules('entrydate', 'Entrydate', 'required');	
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->add();
		}	
		else
		{	
			
			$data = array(   
						'pname' => $this->input->post('pname'),
						'amount' => $this->input->post('amount'),
						'entrydate' => $this->input->post('entrydate')
					);   

		$id = $this->Packagemodel->save($data);	
		$this->session->set_flashdata("message", "Record Added Successfully..."); 				
		redirect('welcome','refresh');	
		
		}
	}


	public function delete($id)
	{
		$this->Packagemodel->delete($id);		
		$this->session->set_flashdata("message", "Record Deleted Successfully..."); 			
		redirect('package/','refresh');
	}
	
	public function edit($id)
	{			
		$data["editdata"] = $this->Packagemodel->get_by_id($id)->row();	

		$session_data = $this->session->userdata('logged_in');
		$data['email'] = $session_data['email'];
		$data['session_data'] = $session_data;				
		$data['title'] = 'Package';
		$data['action'] = "Edit Record";
		
		
		$this->load->view('header',$data);
		$this->load->view('package/edit',$data);
		$this->load->view('footer');
	}
	public function updaterecord()
	{
		
		$this->form_validation->set_rules('pname', 'Package Name', 'required');
        $this->form_validation->set_rules('amount', 'Amount', 'required');
		$this->form_validation->set_rules('entrydate', 'Entrydate', 'required');	
		
                
		if ($this->form_validation->run() == FALSE)
		{
			$this->edit($this->input->post('pid'));
		}	
		else
		{	
		
				$data = array(                         
                    	'pname' => $this->input->post('pname'),
						'amount' => $this->input->post('amount'),
						'entrydate' => $this->input->post('entrydate')
                );  	
			$id = $this->input->post('pid');		
			$this->Packagemodel->update($id,$data);	
			$this->session->set_flashdata("message", "Record Updated Successfully..."); 									
			redirect('package','refresh');	
		}
						
	}

}
