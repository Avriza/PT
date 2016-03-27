<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link href="css\bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css\bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css\bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css\contact.css" rel="stylesheet" type="text/css">
	<script src="js\jquery-1.12.0.js" type="text/javascript" rel="stylesheet"></script>
	<script src="js\bootstrap.min.js" type="text/javascript" rel="stylesheet"></script>
	<link href="css\font-awesome.css" rel="stylesheet">
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
			<li class="active"><a href="contact.php">Contact</a></li>
			<li class="nonactive"><a href="#">About Us</a></li>
			<li class="nonactive">
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

	<!-- Contact Container -->
	<div id="contact-cont">
		<div class="upload">
			<a href=".bs-example-modal-sm" role="button" data-toggle="modal"><i class="fa fa-upload fa-3x"></i></a>
			<h2>Upload Bond</h2>
		</div>
		<div class="google">
			<a href="#"><i class="fa fa-google-plus fa-3x" type="button" data-toggle="tooltip" data-placement="top" title="Avriza+"></i></a>
			<h2>Google+</h2>
		</div>
		<div class="wa">
			<a href="#"><i class="fa fa-whatsapp fa-3x" type="button" data-toggle="tooltip" data-placement="top" title="085731708900"></i></a>
			<h2>Whatsapp</h2>
		</div>
		<div class="email">
			<a href="#"><i class="glyphicon glyphicon-envelope fa-3x" type="button" data-toggle="tooltip" data-placement="top" title="mavrizab@gmail.com"></i></a>
			<h2>Email</h2>
		</div>
		<div class="facebook">
			<a href="#"><i class="fa fa-facebook fa-3x" type="button" data-toggle="tooltip" data-placement="top" title="Avriza Bramantyo"></i></a>
			<h2>Facebook</h2>
		</div>
		<div class="twitter">
			<a href="#"><i class="fa fa-twitter fa-3x" type="button" data-toggle="tooltip" data-placement="top" title="@AvrizaB"></i></a>
			<h2>Twitter</h2>
		</div>
		<script type="text/javascript">
						$(function () {
					  $('[data-toggle="tooltip"]').tooltip()
					})</script>
	</div>

	<!-- Upload Gambar -->
	<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
	      <div class="search">
	      	...
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Footer -->
	<div id="footer">
		&copy;2016 Endeavour Team
	</div>
</body>
</html>