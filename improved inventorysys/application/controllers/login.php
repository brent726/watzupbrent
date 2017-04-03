<?php
class Login extends CI_controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('top5_model');
		
	}

	public function index()
	{
		$data['values'] = $this->top5_model->showall();
		$this->load->view('login_view', $data);
	}



}	
?>