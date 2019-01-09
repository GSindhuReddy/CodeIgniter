<?php
class Logout extends CI_Controller{
	public function index() {
		session_destroy();
		$this->load->view('login');
	}
}
