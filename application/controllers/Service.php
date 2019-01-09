<?php 
  class Service extends CI_Controller { 
 
      function __construct() { 
         parent::__construct(); 
         $this->load->library('session');
		 $this->load->library('email');
		 $this->load->library('phpmailer');
         $this->load->helper('form'); 
      } 	
      public function index() { 
	  
         $this->load->view('service'); 
      } 
	  public function serviceMethod(){
		  //checking if button is clicked
			$clkSubmit = $this->input->post('submit');
			if($clkSubmit){			
				$this->form_validation->set_rules('fName','First Name','required');
				$this->form_validation->set_rules("lName","Last Name",'required');
				$this->form_validation->set_rules("email","Email",'required');
				$this->form_validation->set_rules("phone","Phone",'required');
				$this->form_validation->set_rules("bname","BusinessName",'required');
				if($this->form_validation->run() == false){
					$this->load->view('service');
				}
				else {
					$toEmail = $this->input->post('email');
					$this->send_mail($toEmail);
					$this->load->model('ServiceModel');
					$this->ServiceModel->registerService();
					$this->load->view('service');
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
		  $this->email->message('Your Password for Petstore is ' .$pass);
		  if ($this->email->send())
		  {
			  echo "<script>alert('Mail Sent Successfully to ');</script>";
		  }
		  else
		  {
			  echo "<script>alert('Sending Mail Failed');</script>";
			  echo $this->email->print_debugger();
			  $this->load->view('home');
		  }

	  }
     
   } 
?>
