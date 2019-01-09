<?php
Class ClientORService extends CI_Controller{	
	public function index() {
		$this->load->helper(array('form','url'));
		$this->load->view('clientORservice');
	}
}
?>