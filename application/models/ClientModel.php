<?php 
Class ClientModel extends CI_Model{
	function registerClient(){
		$fname = $this->input->post('fName');
		$lname = $this->input->post('lName');
		$phone = $this->input->post('phone');
		$inputemail = $this->input->post('email');
		$roleID = 1;
		$pass = '1234567';
		$data = array(
			'fname' => $fname,
			'lname' => $lname,
			'phone' => $phone,
			'email' => $inputemail,
			'roleid' => $roleID,
			'password' => $pass
		);	
		$this->db->where('email',$inputemail);
		$query1 = $this->db->get('client');
		 
		/* $query1 = $this->db->query("select email from client where email = '".$_POST['email']"' "); */
		if($query1->num_rows() > 0) {
			echo '<script>alert("Email already exists")</script>';
		}
			else{
				$this->db->insert("client",$data);
				$query = $this->db->query("select uid ,email from client where uid=(select max(uid) from client)");
				foreach($query->result() as $row){
					$clientserviceId = $row->uid;
					$email = $row->email;
					$this->db->set('email', $email);
					$this->db->set('roleId', $roleID);
					$this->db->set('clientserviceId', $clientserviceId);
					$this->db->set('password', $pass);					
					$this->db->insert('userlogin');
					echo "<script>alert('Client Registered Successfully.Please Confirm your Registration through the link sent to your Mail');</script>";
				}
			}
					
		}
		
		/* $this->db->insert("login",$datalogin); */
	}
?>
