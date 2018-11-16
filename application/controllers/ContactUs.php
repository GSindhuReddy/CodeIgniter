<?php
Class ContactUs extends CI_Controller{	
	public function index() {
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('contactus');
	}
	public function contactusmethod() {
		//checking if button is clicked
		$clkSubmit = $this->input->post('submit');
		if($clkSubmit){
			$fName = $this->input->post('fName');
			$lName = $this->input->post('lName');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$data["firstName"] = $fName;
			$data["lastName"] = $lName;
			$data["email"] = $email;
			$data["phone"] = $phone;
			echo "submitted";
		}
		else{
			return;
			echo "not submitted";
		}
	}
}
?>