<?php
session_start();

class Fridge extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('fridge_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
	   		$data['username'] = $session_data['username'];
	   		$data['email'] = $session_data['email'];
	   		$data['admin'] = $session_data['admin'];
	   		if($data['admin'] == 0)
	   		{
				$data['values'] = $this->fridge_model->showitems($session_data['id']);
			}
			else
			{
				$data['values'] = $this->fridge_model->showall();
			}
			$this->load->view('list', $data);
		}
		else
		{
			redirect('login', 'refresh');
		}
	}

	public function pdf()
	{
		if($this->session->userdata('logged_in'))
		{

			$session_data = $this->session->userdata('logged_in');
	   		$data['username'] = $session_data['username'];
	   		$admin = $session_data['admin'];
	   		if($admin == 0)
				$data['values'] = $this->fridge_model->showitems($session_data['id']);
			else
				$data['values'] = $this->fridge_model->showall();
			$this->load->library('fpdf_master');
			$this->fpdf->SetFont('Arial','B',14);
			if($admin == 0)
				$this->fpdf->Cell(50,10,$data['username'].' List of Items');
			else
				$this->fpdf->Cell(50,10,' List of All Items');
			$this->fpdf->Ln();
			$this->fpdf->Ln();
			if($admin == 0)
				$header = array('Product Name', 'Quantity', 'Expiry Date', 'Date Added');
			else
				$header = array('Product Name', 'Quantity', 'Expiry Date', 'Date Added','Owner');
			// Colors, line width and bold font
    		$this->fpdf->SetFillColor(255,0,0);
		    $this->fpdf->SetTextColor(255);
		    $this->fpdf->SetDrawColor(128,0,0);
		    $this->fpdf->SetLineWidth(.3);
		    $this->fpdf->SetFont('','B');
		    // Header
		    if($admin == 1)
		    {
		    $w = array(45, 25, 35, 35, 45);
		    for($i=0;$i<count($header);$i++)
		        $this->fpdf->Cell($w[$i],7,$header[$i],1,0,'C',true);
			}
			else
			{
				$w = array(45, 25, 35, 35);
		    	for($i=0;$i<count($header);$i++)
		        $this->fpdf->Cell($w[$i],7,$header[$i],1,0,'C',true);
			}
		    $this->fpdf->Ln();
		    // Color and font restoration
		    $this->fpdf->SetFillColor(224,235,255);
		    $this->fpdf->SetTextColor(0);
		    $this->fpdf->SetFont('');
    		// Data
    		$fill = false;
    		foreach($data['values']->result() as $row)
    		{
      			$this->fpdf->Cell($w[0],6,$row->product_name,'LR',0,'L',$fill);
      			$this->fpdf->Cell($w[1],6,$row->quantity,'LR',0,'L',$fill);
      			$this->fpdf->Cell($w[2],6,date("M d, Y", strtotime($row->expiry_date)),'LR',0,'R',$fill);
            	$this->fpdf->Cell($w[3],6,date("M d, Y", strtotime($row->date_added)),'LR',0,'R',$fill);
            	if($admin == 1)
            		$this->fpdf->Cell($w[4],6,$row->owner,'LR',0,'R',$fill);
        		$this->fpdf->Ln();
        		$fill = !$fill;
    		}
    		$this->fpdf->Cell(array_sum($w),0,'','T');
			echo $this->fpdf->Output($data['username'].'_fridge.pdf','I');// Name of PDF file
				//Can change the type from D=Download the file		
		}
		else
		{
			redirect('login', 'refresh');
		}
	}

	public function add()
	{
		if($this->session->userdata('logged_in'))
		{	
			$session_data = $this->session->userdata('logged_in');
	   		$data['username'] = $session_data['username'];
	   		$data['admin'] = $session_data['admin'];
	   		$data['email'] = $session_data['email'];
			$this->load->view('add', $data);
		}
		else
		{
			redirect('login', 'refresh');
		}
	}

	public function edit_trend()
	{
	  	if($this->session->userdata('logged_in'))
		{	
			$session_data = $this->session->userdata('logged_in');
	   		$data['username'] = $session_data['username'];
	   		$data['admin'] = $session_data['admin'];
	   		$data['email'] = $session_data['email'];
	   		$this->load->model('top5_model');
	   		$data['top5'] = $this->top5_model->showall();
	   		$data['items'] = $this->fridge_model->showall();
			$this->load->view('edittrend', $data);
		}
		else
		{
			redirect('login', 'refresh');
		}
	}

	public function insert()
	{
		$session_data = $this->session->userdata('logged_in');
		if(isset($_POST['submit']))
		{
			$values = array(
					'product_name' 	=> $_POST['product_name'],
					'quantity'		=> $_POST['quantity'],
					'expiry_date'	=> $_POST['year'] .  $_POST['month'] .  $_POST['day'],
					'user_id'       => $session_data['id']

			);

			if($this->fridge_model->insert($values))
				redirect('fridge');

		}
		
		redirect('fridge');
	}

	public function update($id)
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
	   		$data['username'] = $session_data['username'];
	   		$data['admin'] = $session_data['admin'];
	   		$data['email'] = $session_data['email'];
			$data['item'] = $this->fridge_model->show($id);
			$this->load->view('edit', $data);
		}
		else
		{
			redirect('login', 'refresh');
		}
	}

	public function modify()
	{
		$values = array(
				'id' 			=> $_POST['id'],
				'product_name' 	=> $_POST['product_name'],
				'quantity'		=> $_POST['quantity'],
				'expiry_date'	=> $_POST['year'] .  $_POST['month'] .  $_POST['day'] 
		);

		if($this->fridge_model->update($values))
			redirect('fridge');

		redirect('fridge');
	}

	public function modifytrend()
	{
		$this->load->model('top5_model');
		for($x = 1;$x<=5;$x++)
		{
		$values = array(
				'rank' 	=> $_POST['rank'.$x],
				'item' 	=> $_POST['item'.$x],
		);
		$this->top5_model->update($values);
		}

		redirect('fridge');

	}

	public function delete($id)
	{
		$this->fridge_model->delete($id);
		redirect('fridge');
	}

	public function sign_out()
	{
	  	$this->session->unset_userdata('logged_in');
	   	session_destroy();
	   	redirect('fridge', 'refresh');
	}
}


?>