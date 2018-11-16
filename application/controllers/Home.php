<?php 
	Class Home extends CI_Controller{
		public function _construct(){
			parent::__construct();
			$this->load->helper('url');
		}
		public function index(){
			$this->load->view('home');
		}
	}
?>