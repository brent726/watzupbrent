<?php
class Register extends CI_Controller 
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('fridge_model','',TRUE);

  }

   function index()
   {
     //This method will have the credentials validation
     $this->load->library('form_validation');
     $this->load->model('top5_model');
     $this->load->model('user_model');
      $data['values'] = $this->top5_model->showall();

     $this->form_validation->set_rules('user', 'Username', 'trim|required|xss_clean');
     $this->form_validation->set_rules('pass', 'Password', 'trim|required|xss_clean');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
     if($this->form_validation->run() == FALSE)
     { 
       //Field validation failed.  User redirected to login page
      $data['status'] = 'Register Failed!';
       $this->load->view('login_view',$data);
     }
     else
     {
       //Go to private area
       $data['status'] = 'Register Success!';
       $values = array(
          'username'  => $_POST['user'],
          'password'    => $_POST['pass'],
          'email' => $_POST['email']
        );

      if($this->user_model->insert($values))
  
       $this->load->view('login_view',$data);
     }
   
   }
}
?>
