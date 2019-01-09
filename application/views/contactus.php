<!DOCTYPE html>
<html>
	<head>
		<title>WildBuddyPetStore</title>
		<link rel="stylesheet" type="text/css" href = "<?php echo base_url();?>css/pet.css" ></link>
		<meta name=”viewport” content=”width=device-width, initial-scale=1″>
	</head>
	<body id = "wrapper">
		<h1>Pet Store</h1>
		<div class = "total">
			<div class="left">
				<nav>
					<ul>
						<li><a href = "home">Home</a></li>
						<li><a href = "aboutus">About Us</a></li>
						<li><a href = "contactus">Contact Us</a></li>
						<li><a href = "client">Client</a></li>
						<li><a href = "service">Service</a></li>
						<li><a href = "login">Login</a></li>
					</ul>
				</nav>
			</div>
			<div class = "right">
				<img src="<?php echo base_url(); ?>css/images/petStoreContactUs.png"></img>
				<div class = "rightWhite">
					<h2>Contact US</h2>
					<?php echo form_open(base_url()."index.php/contactus/contactusmethod"); ?>
						<p>Required Information is marked with asterisk(*)</p>
						<table>
							<tbody>
							<tr><td>* First Name :</td><td><?php 
							$fdata = array(
												'type'  => 'text',
												'name'  => 'fName',
												
										);
							echo form_input($fdata);echo form_error('fName'); ?></td></tr>
							
							<tr><td>* Last Name :</td><td><?php $ldata = array(
												'type'  => 'text',
												'name'  => 'lName',
												
										);
							echo form_input($ldata);echo form_error('lName'); ?></td></tr>
							<tr><td>* E-mail :</td><td><?php $edata = array(
												'type'  => 'email',
												'name'  => 'email',
												
										); 
							echo form_input($edata);echo form_error('email');?></td></tr>
							<tr><td>Phone :</td><td><?php $pdata = array(
												'type'  => 'text',
												'name'  => 'phone'
										); 
							echo form_input($pdata);echo form_error('phone'); ?></td></tr>
							<tr><td class = "commentsAlign">Comments :</td><td><?php $cdata = array(
												'type'  => 'textarea',
												'name'  => 'comments',
												'rows' => '5',
												'cols' => '22'
										);
							echo form_textarea($cdata);?></textarea></td></tr>
																	
							<tr><td><?php echo form_submit('submit','Submit');?></td></tr>
							</tbody>
						</table>
					</form>
				<footer>
					<span><em>Copyright &copy; 2018 Pet Store</em></span><br>
					<span><a href = "mailto:sindhugarlapati27@gmail.com">sindu@garlapati.com</a></span>
				</footer>
				</div>			
			</div>
		</div>
	</body>
</html>