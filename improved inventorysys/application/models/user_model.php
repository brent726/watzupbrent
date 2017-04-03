<?php

class User_model extends CI_Model
{
	public function insert($values)
	{
		$data = array(
				'username' 	=> $_POST['user'],
				'password'		=> $_POST['pass'],
				'email'	=> $_POST['email']
		);

		return $this->db->insert('users', $data);
	}

	public function showall()
	{
		return $this->db->get('users');
	}

	public function show($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('users');
	}
}
?>