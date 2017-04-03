<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('top5_model');
		$data['values'] = $this->top5_model->showall();
		$this->load->view('login_view',$data);

		//SENDING EMAIL
		$sender_email = 'inventorysys429e@gmail.com';
		// The mail sending protocol.
		$config['protocol'] = 'smtp';
		// SMTP Server Address for Gmail.
		$config['smtp_host'] = 'ssl://smtp.googlemail.com';
		// SMTP Port - the port that you is required
		$config['smtp_port'] = 465;
		// SMTP Username like. (abc@gmail.com)
		$config['smtp_user'] = $sender_email;
		// SMTP Password like (abc***##)
		$config['smtp_pass'] = 'user@1234';
		// Load email library and passing configured values to email library
		$this->load->library('email', $config);
		$this->load->model('email_model');
		$timestamp = strtotime("now");
		$appointments = $this->email_model->get_days_appointments($timestamp);
		if(!empty($appointments))
		{
			foreach($appointments as $appointment)
			{
				$adlaw = date("F j, Y", strtotime($appointment->expiry_date));
	  			$this->email->set_newline("\r\n");
				$this->email->to($appointment->email);
				$this->email->from($sender_email);
				$this->email->subject("Expiry Date Alert");
				$this->email->message("Dear ".$appointment->username."\n\n".$appointment->quantity." - ".$appointment->product_name." will expire on ".$adlaw.".\n\n\nSincerely Yours,\n\nInventory System");
				$this->email->send();
				$this->email_model->mark_reminded($appointment->id);
			}
		}

		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */