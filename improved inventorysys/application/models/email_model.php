<?php

class Email_model extends CI_Model
{
	public function get_days_appointments($month)
  	{
    $month_start = date('Y-m-01', $month);
    $month_end = date('Y-m-31', $month);

    return $this->db->select(' fridge.id, fridge.product_name, fridge.quantity, fridge.expiry_date, fridge.date_added, fridge.is_reminded, users.email, users.username')
      ->from('fridge')
      ->join('users', 'fridge.user_id = users.id')
      ->where('fridge.expiry_date >', $month_start) ->where('fridge.expiry_date <', $month_end)
      ->where('fridge.is_reminded',0)
      ->get()->result();
       
  	}
 
  public function mark_reminded($id)
  {
    return $this->db->where('id', $id)->update('fridge', array('is_reminded' => 1));
  }
}
?>