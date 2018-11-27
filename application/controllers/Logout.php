<?php
/**
 * Created by PhpStorm.
 * User: SindhuReddy
 * Date: 26/11/2018
 * Time: 20:54
 */

class Logout extends CI_Controller{
	public function index() {
		session_destroy();
		$this->load->view('login');
	}
}
