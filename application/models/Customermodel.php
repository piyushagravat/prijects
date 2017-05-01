<?php
Class Customermodel extends CI_Model
{
	
	private $table = 'tbl_customer';
	
			
	function __construct()
	{  	
		parent::__construct(); 
	}	
	
	function get_paged_list($limit = 10, $offset = 0)
	{
		$this->db->order_by('cid');
		return $this->db->get($this->table, $limit, $offset);
	}
	function get_paged_list_by_id($id)
	{
		$this->db->order_by('cid');
		$this->db->where('cid', $id);
		return $this->db->get($this->table);
	}
	function count_all()
	{
		$this->db->order_by('cid','desc');
		return $this->db->count_all($this->table);
	}

	function count_all_by_id($id)
	{
		$this->db->order_by('cid','desc');
		$this->db->where('cid', $id);
		return $this->db->count_all($this->table);
	}
	function get_by_id($id)
	{
		$this->db->where('cid', $id);
		return $this->db->get($this->table);
	}	
	function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}			
	function update($id, $data)
	{
		$this->db->where('cid', $id);
		$this->db->update($this->table, $data);
	}		
	function delete($id)
	{
		
		$this->db->where('cid', $id);
		$this->db->delete($this->table);			
	}
	
}
?>