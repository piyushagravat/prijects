<?php
Class Packagemodel extends CI_Model
{
	
	private $table = 'tbl_plans';
	
			
	function __construct()
	{  	
		parent::__construct(); 
	}	
	
	function get_paged_list($limit = 10, $offset = 0)
	{
		$this->db->order_by('pid');
		return $this->db->get($this->table, $limit, $offset);
	}
	function get_paged_list_by_id($id)
	{
		$this->db->order_by('pid');
		$this->db->where('pid', $id);
		return $this->db->get($this->table);
	}
	function count_all()
	{
		$this->db->order_by('pid','desc');
		return $this->db->count_all($this->table);
	}

	function count_all_by_id($id)
	{
		$this->db->order_by('pid','desc');
		$this->db->where('pid', $id);
		return $this->db->count_all($this->table);
	}
	function get_by_id($id)
	{
		$this->db->where('pid', $id);
		return $this->db->get($this->table);
	}	
	function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}			
	function update($id, $data)
	{
		$this->db->where('pid', $id);
		$this->db->update($this->table, $data);
	}		
	function delete($id)
	{
		
		$this->db->where('pid', $id);
		$this->db->delete($this->table);			
	}
	
	
	
}
?>