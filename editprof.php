<!DOCTYPE html>
<html>
<?php include("config.php");?>
<head>
	<title>Profile</title>
	<link href="css\bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css\bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css\bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css\editprof.css" rel="stylesheet" type="text/css">
	<script src="js\jquery-1.12.0.js" type="text/javascript" rel="stylesheet"></script>
	<script src="js\bootstrap.min.js" type="text/javascript" rel="stylesheet"></script>
	<link rel="shortcut icon" href="images/logo.png" />
</head>
<body>
	<!-- Menu -->
	<div class="container navbar-fixed-top">
		<!-- Logo -->
		<div class="logo">
			<a href="home.php"><img src="images/logo2.png" width="54px" height="50px"></a>
		</div>

		<ul>
		<strong>
			<li class="nonactive"><a href="home.php">Home</a></li>
			<li class="nonactive"><a href="organization.php">Organization</a></li>
			<li class="nonactive"><a href="contact.php">Contact</a></li>
			<li class="nonactive"><a href="#">About Us</a></li>
			<li class="active">
				<div class="dropdown">
				    <a href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration:none">Accounts <span class="glyphicon glyphicon-triangle-bottom"></span></a>
				  <ul class="dropdown-menu" aria-labelledby="dLabel">
				    <a href="editprof.php" class="anak"><li >Edit Profile</li></a>
				    <a href="index.php" action="logout.php"><li class="anak">Sign Out</li></a>
				  </ul>
				</div>
			</li>
		</strong>
		</ul>
	</div>
	<?php
		$nim=$_COOKIE['nim'];
		$sql="Select * from mahasiswa where nim=$nim";
		$res=$conn->query($sql);
		if(mysqli_num_rows($res)>0){
			while ($row=mysqli_fetch_assoc($res)) {
				$username=$row['username'];
				$pass=$row['password'];	
		    	$nama=$row['nama_mhs'];
				$email=$row['email'];
		    	$birthday=$row['birthday'];
				$telpon=$row['telpon'];
		    	$address=$row['address'];
				?>
					<!-- Data Container -->
					<div id="container">
					<form method="post" action="">
						<h2 style="color:#071424; margin-bottom: 20px">Profile</h2>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label" style="width:100px">NIM</label>
						    <div class="col-sm-10" style="width:65%">
						      <input type="text" class="form-control name" id="disabledInput" value="<?php echo $nim?>" disabled>
						    </div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label" style="width:100px">Name</label>
						    <div class="col-sm-10" style="width:65%">
						      <input type="text" class="form-control name" id="disabledInput" value="<?php echo $nama?>" disabled>
						    </div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label" style="width:100px">Username</label>
						    <div class="col-sm-10" style="width:65%">
						      <input type="text" class="form-control name" id="disabledInput" name="username" value="<?php echo $username?>">
						    </div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label" style="width:100px">Password</label>
						    <div class="col-sm-10" style="width:65%">
						      <input type="password" class="form-control name" id="disabledInput" name="pass" value="<?php echo $pass?>">
						    </div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label" style="width:100px">Email</label>
						    <div class="col-sm-10" style="width:65%">
						      <input type="text" class="form-control name" id="disabledInput" name="email" value="<?php echo $email?>">
						    </div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label" style="width:100px">Birthday</label>
						    <div class="col-sm-10" style="width:65%">
						      <input type="text" class="form-control name" id="disabledInput" value="<?php echo $birthday?>" disabled>
						    </div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label" style="width:100px">Telephone</label>
						    <div class="col-sm-10" style="width:65%">
						      <input type="number" class="form-control name" id="disabledInput" name="telp" value="<?php echo $telpon?>">
						    </div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label" style="width:100px">Address</label>
						    <div class="col-sm-10" style="width:65%">
						      <input type="text" class="form-control name" id="disabledInput" name="address" value="<?php echo $address?>">
						    </div>
						</div>

						<button type="submit" name="btnUpdate" class="btn">Edit</button>
					</form>			
				<?php				
			}
		}
	?>
	
		<?php
			if(isset($_POST['btnUpdate'])){
				$mail=$_POST['email'];
				$sql="Update mahasiswa set email='$mail' where nim=$nim";
				if($conn->query($sql)===true){
					echo"<script type='text/javascript'>alert('Data has been Update!');</script>";
				}else{
					echo"<script type='text/javascript'>alert('Failed to Update');</script>";
				}
			}	
			?>
	</div>
</body>
</html>