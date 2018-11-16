<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
Class Test extends CI_Controller {
	public function myindex() {
		
		$this->load->view('test');
	}
	
}
?>