<?php
Class Login extends CI_Controller{	
	public function index() {
		$this->load->helper(array('form','url'));
		$this->load->view('login');
	}
	public function loginmethod() {
		//checking if button is clicked
		$clkSubmit = $this->input->post('submit');
		if($clkSubmit){			
			$this->form_validation->set_rules("email","Email",'required');
			$this->form_validation->set_rules("password","Password",'required');
			if($this->form_validation->run() == false){
				$this->load->view('login');
			}
			else {
				$this->load->model('LoginModel');
				$this->LoginModel->loginService();
				
				
				/* $this->load->view('home'); */
			}
		}
		else{		
			return;
		}
	}
}
?>