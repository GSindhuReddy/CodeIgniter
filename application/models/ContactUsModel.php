<?php 
Class ContactUsModel extends CI_Model{
	
	function insertContactUs(){
		$fname = $this->input->post('fName');
		$lname = $this->input->post('lName');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$comments = $this->input->post('comments');
		$data = array(
			'fname' => $fname,
			'lname' => $lname,
			'phone' => $phone,
			'mail' => $email,
			'comments' => $comments
		);		
		$this->db->insert("contactus",$data);
	}
	
}
?>