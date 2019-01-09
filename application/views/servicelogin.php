<!DOCTYPE html>
<html>
	<head>
		<title>WildBuddyPetStore</title>
		<link rel="stylesheet" type="text/css" href = "<?php echo base_url();?>css/pet.css" ></link>
		<meta name=”viewport” content=”width=device-width, initial-scale=1″>
	</head>
	<body id = "wrapper">
		<h1>Business's Pet Store</h1>
		<div class = "total">
		<div class="left">
				<nav>
					<ul>
						<li>Welcome <?php echo $this->session->email; ?></li><li> <?php echo '<script><br></script>'.session_id(); ?></li>
						<li><a href = "home">LogOut</a><?php $this->session->unset_userdata('email');?></li>
					</ul>
				</nav>
			</div>
			<div class = "right">
					<img src="<?php echo base_url(); ?>css/images/petstoreindexbanner.png"></img>
				<div class = "rightWhite login">
					<h2>My Business</h2>
					<?php echo form_open(base_url()."index.php/servicelogin"); ?>
						<p>Required Information is marked with asterisk(*)</p>
						<table>
							<tbody>
							<tr><td>Business Name :</td><td><input type = "email" name = "email"></td></tr>
							<tr><td>*Service :</td><td><input type = "password" name = "password"></td></tr>
							<tr><td><input type = "submit" value = "Add New One"></td></tr>
							</tbody>
						</table>
					</form>
				<footer class = "loginAddress">
					<span><em>Copyright &copy; 2018 Pet Store</em></span><br>
					<span><a href = "mailto:akshay@waikar.com">sindu@garlapati.com</a></span>
				</footer>
				</div>			
			</div>
		</div>
	</body>
</html>	