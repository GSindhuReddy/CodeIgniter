<?php
Class ContactUs extends CI_Controller{	
	public function index() {
		$this->load->helper(array('form','url'));
		$this->load->view('contactus');
	}
	public function contactusmethod() {
		//checking if button is clicked
		$clkSubmit = $this->input->post('submit');
		if($clkSubmit){			
			$this->form_validation->set_rules('fName','First Name','required');
			$this->form_validation->set_rules("lName","Last Name",'required');
			$this->form_validation->set_rules("email","Email",'required');
			$this->form_validation->set_rules("phone","Phone",'required');
			if($this->form_validation->run() == false){
				$this->load->view('contactus');
			}
			else {
				$this->load->model('ContactUsModel');
				$this->ContactUsModel->insertContactUs();
				echo "<script>alert('Contact Saved Successfully');</script>";
				$this->load->view('home');
			}
		}
		else{		
			return;
		}
	}
}
?>