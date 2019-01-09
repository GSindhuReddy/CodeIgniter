<?php 
Class LoginModel extends CI_Model{
	function loginService(){
		$email = $this->input->post('email');
		$pass = $this->input->post('password');	
		$query = $this->db->query("SELECT email,roleId,password from userlogin where email = '".$email."' ");
		if($query->num_rows() == 1){
			foreach ($query->result() as $row)
			{
				if(($row->email) == $email && ($row->roleId) == 1){
					if($pass == ($row->password)){
						$this->usersessions($email);
						/* echo $this->session->userdata('email'); */
						$this->load->view('clientlogin');
					}
					else{
						/* echo "<script>alert('please enter the correct password');</script>"; */
						$this->session->set_flashdata('error','please enter the correct password');
						/* redirect(base_url()."index.php/login"); */
						$this->load->view('login');
					}
				}
				else if(($row->email) == $email && ($row->roleId) == 2){
					if($pass == ($row->password)){
						$this->usersessions($email);
						/* redirect(base_url()."index.php/servicelogin"); */
						$this->load->view('servicelogin');
					}
					else{
						/* echo "<script>alert('please enter the correct password');</script>"; */
						$this->session->set_flashdata('error','please enter the correct password');
						redirect(base_url()."index.php/login");
					}
				}
				
				/* else{
					 //echo "<script>alert('no user found with such email id');</script>";
					$this->session->set_flashdata('error','no user found with such email id');
					redirect(base_url()."index.php/login");
				} */
			}
		}
		else if($query->num_rows() > 1){
			echo "<script>alert('Do you want to login as client or service');</script>";
			redirect(base_url()."index.php/clientORservice");
		}
		else {
				/* echo "<script>alert('No Matching Record found for the Entered MailID.Please check the MailId entered');</script>"; */
				$this->session->set_flashdata('error','No Matching Record found for the Entered MailID.Please check the MailId entered');
				redirect(base_url()."index.php/login");
		}		
	}	
	function usersessions($email){		
		$this->session->set_userdata('email',$email);
		/* if(isset($_SESSION['email'])){
			print_r($this->session->all_userdata());
		} */
		
		echo "<script>alert('In User Session Function');</script>";
		return $this->session->userdata('email');
	}
}
?>