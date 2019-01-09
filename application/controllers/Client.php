<?php 
  class Client extends CI_Controller { 
 
      function __construct() { 
         parent::__construct(); 
         $this->load->library('session');
		 $this->load->library('email');
		 $this->load->library('phpmailer');
         $this->load->helper('form'); 
      } 
		
      public function index() {
         $this->load->view('client');
        /*  $this->clientMethod(); */
      } 
	  public function clientMethod(){
		  //checking if button is clicked
			$clkSubmit = $this->input->post('submit');
			if($clkSubmit){			
				/* $this->form_validation->set_rules('fName','First Name','required'); */
				$this->form_validation->set_rules("lName","Last Name",'required');
				$this->form_validation->set_rules("email","Email",'required');
				$this->form_validation->set_rules("phone","Phone",'required');
				if($this->form_validation->run() == false){
					$this->load->view('client');
				}
				else {
					$toEmail = $this->input->post('email');
					$this->load->model('ClientModel');
					$this->send_mail($toEmail); 				
					$this->ClientModel->registerClient();
					$this->load->view('login');
				}
			}
			else{		
				return;
			}
		}
	   public function send_mail($to) {
		   $this->load->library('email');
		   $this->email->from('sindhugarlapati27@gmail.com'); //change it
		   $this->email->to($to); //change it
		   $this->email->subject('Petstore Password');
		   $pass = '1234567';
		   $this->email->message('Your Password for Petstore is' .$pass);
		   if ($this->email->send())
		   {
			  echo "<script>alert('success');</script>";
		   }
		   else
		   {
			  echo "<script>alert('failed');</script>";
			 echo $this->email->print_debugger();
			  $this->load->view('home');
		   }
		
	  } 
     
   } 
?>
