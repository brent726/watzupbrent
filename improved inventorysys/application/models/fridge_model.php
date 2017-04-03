<?php

class Fridge_model extends CI_Model
{
	public function insert($values)
	{
		$data = array(
				'id'			=> 0,
				'product_name' 	=> $_POST['product_name'],
				'quantity'		=> $_POST['quantity'],
				'expiry_date'	=> $_POST['year'] .  $_POST['month'] .  $_POST['day'],
				'date_added'	=> date('Y-m-d'),
				'user_id'       => $values['user_id']
		);

		return $this->db->insert('fridge', $data);
	}

	public function showall()
	{
		$variable = 'owner';
		$this->db->select(' fridge.id, fridge.product_name, fridge.quantity, fridge.expiry_date, fridge.date_added, users.username AS `' . $variable . '`')
     			 ->from('fridge')
     			 ->join('users', 'fridge.user_id = users.id')
     			 ->order_by("username", "asc");

		return $this->db->get();
	}

	public function showitems($id)
	{
		$this->db->where('user_id', $id);
		return $this->db->get('fridge');
	}

	public function show($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('fridge');
	}

	public function update($values)
	{
		$data = array(
				'id' 			=> $values['id'],
				'product_name' 	=> $values['product_name'],
				'quantity' 		=> $values['quantity'],
				'expiry_date'	=> $values['expiry_date']
			);

		$this->db->where('id',$values['id']);
		$this->db->update('fridge',$data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('fridge');
	}

	public function login($username, $password)
	{
		$this -> db -> select('id, username, password, email, admin');
		$this -> db -> from('users');
		$this -> db -> where('username', $username);
		$this -> db -> where('password', $password);
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
	}
}
?>