<?php

Class User extends CI_Model

{

	function login($email,$password)

	{

		$this -> db -> select('id,email,password,first_name,last_name,role,created_date');

		$this -> db -> from('tbl_users');

		$this -> db -> where('email = '."'".$email."'");

		$this -> db -> where('password = '."'".md5($password) ."'");

		$this -> db -> limit(1);



		$query = $this -> db -> get();

					

		

		if($query -> num_rows() == 1)

		{

			return $query->result();

			

		}

		else

		{

			return false;

		}

                $this->db->_compile_select();

                $this->output->enable_profiler(TRUE);

	}

	function check_oldpassword($email,$password)

	{

		$this->db->where('email', $email);

		$this->db->where('password', md5($password));

		$this->db->from('tbl_users');

		

		$query = $this -> db -> get();

			

		if($query -> num_rows() == 1)

		{

			return true;

		}

		else

		{

			return false;

		}

	}

	function updatepassword($email,$oldpassword,$data)

	{

		$this->db->where('email', $email);

		$this->db->where('password', md5($oldpassword));

		$this->db->update('tbl_users', $data);

	}

	

	function login_member($member_code,$password)

	{

		$this -> db -> select('member_id,member_code,company_name,password,concern_personname,contact_number,email,img');

		$this -> db -> from('tbl_members');

		$this -> db -> where('member_code = '."'".$member_code."'");

		$this -> db -> where('password = '."'".md5($password) ."'");

		$this -> db -> limit(1);



		$query = $this -> db -> get();

					

		

		if($query -> num_rows() == 1)

		{

			return $query->result();

			

		}

		else

		{

			return false;

		}

                $this->db->_compile_select();

                $this->output->enable_profiler(TRUE);

	}

}

?>