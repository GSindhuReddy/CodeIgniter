<?php 
Class ServiceModel extends CI_Model{
	function registerService(){
		$fname = $this->input->post('fName');
		$lname = $this->input->post('lName');
		$phone = $this->input->post('phone');
		$inputemail = $this->input->post('email');
		$business = $this->input->post('bname');
		$roleID = 2;
		$pass = '1234567';
		$data = array(
			'fname' => $fname,
			'lname' => $lname,
			'phone' => $phone,
			'email' => $inputemail,
			'bname' => $business,
			'roleid' => $roleID
		);	
		$this->db->where('email',$inputemail);
		$query1 = $this->db->get('service');	
		if($query1->num_rows() > 0) {
					echo '<script>alert("Email already exists")</script>';
		}		
		/* foreach($query->result() as $row){
			if($row->email == $inputemail){
				echo '<script>alert("Email Exists.Please Try Registering with Different EmailID");</script>';
			} */
			else{
				$this->db->insert("service",$data);
				$query = $this->db->query("select sid ,email from service where sid=(select max(sid) from service)");
				foreach($query->result() as $row){
					$clientserviceId = $row->sid;
					$email = $row->email;
					$this->db->set('email', $email);
					$this->db->set('roleId', $roleID);
					$this->db->set('clientserviceId', $clientserviceId);
					$this->db->set('password', $pass);
					$this->db->insert('userlogin');
					echo "<script>alert('Service Registered Successfully.Please Confirm your Registration through the link sent to your Mail');</script>";
				}
			}
		}
		
	}
?>