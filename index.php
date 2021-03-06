<html>
	<?php include("config.php");
		
	?>
	<head>
		<link href="css\bootstrap.css" rel="stylesheet" type="text/css">
		<link href="css\bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="css\bootstrap-theme.min.css" rel="stylesheet" type="text/css">
		<link href="css\landing.css" rel="stylesheet" type="text/css">
		<title>Landing Page</title>
		<link rel="shortcut icon" href="images/logo.png" />
	</head>
	<body>
		<div id="desc">
			<img src="images/teets logo.png" width="500px">
		</div>

	<div id="container">
		<h2>Sign In</h2>

		<form method="post" action="login.php">
			<!--NIM-->
			<div id="user-cont">
				<div id="icon">
					<span class="glyphicon glyphicon-user icon" aria-hidden="true" style="color:#1FB899"></span>
				</div>
				<div id="input">
					<input type="number" class="form-control username" id="exampleInputEmail1" placeholder="NIM" name="nim" required="">
				</div>
			</div>

			<!--pass-->
			<div id="user-cont">
				<div id="icon">
					<span class="glyphicon glyphicon-lock focus" aria-hidden="true" style="color:#1FB899"></span>
				</div>
				<div id="input">
					<input type="password" class="form-control pass-login" id="exampleInputPassword1" placeholder="Password" name="pass-login" required="">
				</div>
			</div>
			<div class="checkbox">
			    <label>
			      <input type="checkbox"> Remember Me
			    </label>
			    <label><a href="#">Forgot Password?</a></label>
			</div>
			
			<!-- Sign In Button -->
			<button type="submit" class="btn">Sign In</button>
			<label style="font-weight:normal; margin-left:100px; margin-top: 10px;"><a href="#popup">Don't have any account?</a>
			</label>
		</form>	
	</div>
	

		<!-- Popup Register -->
		<div id="popup">
           <div class="window">
               <a href="#" class="close-button" title="Close"><span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:white"></span></a>
               <h3 style="color:#1FB899">Sign Up</h3>
               <form class="form-horizontal" method="post" action="register.php">
               		<div class="form-group">
					    <label for="inputEmail3" class="col-sm-2 control-label" style="width:17%">Name</label>
					    <div class="col-sm-10" style="width:65%">
					      <input type="text" class="form-control name" id="inputEmail3" placeholder="Name" name="nama" required="">
					    </div>
					</div>
					<div class="form-group">
					    <label for="inputEmail3" class="col-sm-2 control-label" style="width:17%">Username</label>
					    <div class="col-sm-10" style="width:65%">
					      <input type="text" class="form-control username-reg" id="inputEmail3" placeholder="Username" name="username-reg" required="">
					    </div>
					</div>
					<div class="form-group">
					    <label for="inputEmail3" class="col-sm-2 control-label" style="width:17%">NIM</label>
					    <div class="col-sm-10" style="width:65%">
					      <input type="number" class="form-control nim" id="inputEmail3" placeholder="NIM" name="nim" required="">
					    </div>
					</div>
					<div class="form-group">
					    <label for="inputEmail3" class="col-sm-2 control-label" style="width:17%">Email</label>
					    <div class="col-sm-10" style="width:65%">
					      <input type="email" class="form-control email" id="inputEmail3" placeholder="Email" name="email" required="">
					    </div>
					</div>
					<div class="form-group">
					    <label for="inputEmail3" class="col-sm-2 control-label" style="width:17%">Password</label>
					    <div class="col-sm-10" style="width:65%">
					      <input type="password" class="form-control pass" id="inputEmail3" placeholder="Password" name="password-reg" required="">
					    </div>
					</div>
					<div class="form-group">
					    <label for="inputEmail3" class="col-sm-2 control-label" style="width:17%; padding-top:0px">Confirm Password</label>
					    <div class="col-sm-10" style="width:65%">
					      <input type="password" class="form-control pass" id="inputEmail3" placeholder="Confirm Password" name="confirmpass" required="">
					    </div>
					</div>
					<div class="form-group">
					    <label for="inputEmail3" class="col-sm-2 control-label" style="width:17%">Birthday</label>
					    <div class="col-sm-10" style="width:65%">
					      <input type="text" class="form-control pass" id="inputEmail3" name="birthday" required="">
					    </div>
					</div>
					<div class="form-group">
					    <label for="inputEmail3" class="col-sm-2 control-label" style="width:17%">Telephone</label>
					    <div class="col-sm-10" style="width:65%">
					      <input type="number" class="form-control telp" id="inputEmail3" placeholder="Telephone" name="telp" required="">
					    </div>
					</div>
					<div class="form-group">
					    <label for="inputEmail3" class="col-sm-2 control-label" style="width:17%">Address</label>
					    <div class="col-sm-10" style="width:65%">
					      <input type="text" class="form-control address" id="inputEmail3" placeholder="Address" name="address" required="">
					    </div>
					</div>
					<button type="submit" class="btn " style="width: 64%; margin-right: 84px; background-color: #00A243;">Sign Up</button>
               </form>
           </div>
       </div>
    
       <!-- Footer 
       <div id="footer">
		&copy;2016 Endeavour Team
	</div>-->
	</body>
</html>