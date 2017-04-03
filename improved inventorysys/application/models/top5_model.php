<?php

class Top5_model extends CI_Model
{
	public function showall()
	{
		$this->db->from('top5');
		$this->db->order_by("rank", "asc");
		$query = $this->db->get(); 
		return $query;
	}

	public function show($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('top5');
	}

	public function update($values)
	{
		$data = array(
				'rank' 	=> $values['rank'],
				'item' 	=> $values['item'],
			);

		$this->db->where('rank',$values['rank']);
		$this->db->update('top5',$data);
	}

}
?>