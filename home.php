<!DOCTYPE html>
<html>
<?php
	include("config.php");
	if(isset($_COOKIE['nim'])){
		
	}else{
		echo "gagal";
	}
?>
<head>
	<title>Home</title>
	<link href="css\bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css\bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css\bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css\home.css" rel="stylesheet" type="text/css">
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

		<!-- Search Box -->
		<div id="search">
			<div id="search-cont">
				<div id="icon">
					<span class="glyphicon glyphicon-search icon" aria-hidden="true" style="color:#1FB899"></span>
				</div>
				<form method="post" action="homesearch.php">
					<div id="input">
						<input type="text" class="form-control searchbox" id="exampleInputEmail1" placeholder="Search Event ..." name="search">
					</div>
					<button type="submit" class="submit"><i class="fa fa-arrow-right"></i></button>
				</form>
			</div>
		</div>
		<ul>
		<strong>
			<li class="active"><a href="home.php">Home</a></li>
			<li class="nonactive"><a href="organization.php">Organization</a></li>
			<li class="nonactive"><a href="contact.php">Contact</a></li>
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

	<!-- Ticket Container -->
	<?php
		$sql="Select * from event";
		$res=$conn->query($sql);
		$jum=0;
		if(mysqli_num_rows($res) > 0){
			while($row = mysqli_fetch_assoc($res)){
				$jum++;
				$eve_name=$row['nama_acara'];
				$org=$row['nama_org'];
				$date=$row['tgl_event'];
				$desc=$row['desc_event'];
				$contact=$row['contact_event'];
				$kuota=$row['kuota'];
				$hrg=$row['harga'];
				$logo=$row['logo_event'];
				?>
					<div id="ticket-cont">
						<div id="header">
							<div id="picture">
								<img src="images/<?php echo $logo; ?>" alt="p1" class="img-circle" width="100px" height="100px">
							</div>
							<div id="title">
								<h4 class="name"><strong><?php echo $eve_name; ?></strong></h4>
								<h5 style="color:white">by</h5>
								<h4 style="color:white"><?php echo $org; ?></h4>
							</div>
						</div>
						<div id="tes-info">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							  <div class="panel panel-default">
							    <div class="one" role="tab" id="headingOne">
							      <h4 class="panel-title" style="margin-left:155px">
							        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo $jum; ?>" aria-expanded="true" aria-controls="collapseOne">
							          <strong>Information</strong>
							        </a>
							      </h4>
							    </div>
							    <div id="collapseOne<?php echo $jum; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							      <div class="panel-body body-one">
							        <div id="info-cont">
							        	<h5 style="color:white">Rest Quota</h4>
							        	<h1 style="color:#1FB899; font-size:40px; margin-top:10px"><?php echo $kuota; ?></h1>
							        </div>
							        <div id="info-cont">
							        	<h5 style="color:white">Date</h4>
							        	<h1 style="color:#1FB899; font-size:30px; margin-top:15px;"><?php echo $date; ?></h1>
							        </div>
							        <div id="info-cont">
							        	<h5 style="color:white">Fee</h4>
							        	<h1 style="color:#1FB899; font-size:40px; margin-top:10px"><?php echo $hrg; ?>K</h1>
							        </div>
							        <div id="info-cont">
							        	<h5 style="color:white">Contact</h4>
							        	<h1 style="color:#1FB899; font-size:25px; margin-top:20px"><?php echo $contact; ?></h1>
							        </div>
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="two" role="tab" id="headingTwo">
							      <h4 class="panel-title" style="text-align:center">
							        <a class="collapsed desc" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo<?php echo $jum; ?>" aria-expanded="false" aria-controls="collapseTwo">
							          <strong>Description</strong>
							        </a>
							      </h4>
							    </div>
							    <div id="collapseTwo<?php echo $jum; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							      <div class="panel-body body-two">
							        <?php echo $desc; ?>
							      </div>
							    </div>
							    
							  </div>
							  <div class="panel panel-default">
							    <div class="three" role="tab" id="headingThree">
							      <h4 class="panel-title" style="text-align:center">
							        <a class="collapsed buy" role="button" data-toggle="modal" data-parent="#accordion" href=".bs-example-modal-sm1<?php echo $jum; ?>" aria-expanded="false" aria-controls="collapseThree">
							          <strong>Buy Ticket</strong>
							        </a>
							      </h4>
							    </div>
							  </div>
							</div>
						</div>
					</div>
					
					<!-- Buy Ticket Modal -->
					<div class="modal fade bs-example-modal-sm1<?php echo $jum; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
					  	<div class="modal-dialog modal-sm">
						    <div class="modal-content1">
						      <h2 style="color:#1FB899; text-align:center">Payment Info</h2>
						    	<div class="content">
						      	
							      	<h4>Event Name :  <?php echo $eve_name; ?></h3>
							      	<h4>Fee :  Rp <?php echo $hrg; ?>.000</h3>
							      	<div class="divider"></div>
							      	<h2 style="color:#1FB899; text-align:center">Payment Step</h2>
							      	
							      	1. You can transfer to these account:<br>
								      	Mandiri : 12345678<br>
								      	BCA : 23456789<br><br>
							      	2. Take a photo of your payment receipt<br><br>
							      	3. Upload your photo of payment receipt on Contact Menu<br><br>
							      	<div class="divider"></div>
							      	<h4 style="text-align: center; margin-top: 20px;">Do you want to proceed the payment?</h4>
							      	<div id="button">
							      		<a href="#" style="color: white" data-dismiss="modal">
								      		<div id="no">
								      			No
								      		</div>
								      	</a>
							      		<a href=".modal-content2" style="color: white" role="button" data-toggle="modal">
							      		<!-- BELUM DIBENERIN -->
							      			<div id="yes">
								      			Yes
								      		</div>
								      	</a>
							      	</div>
						      	</div>
						    </div>
					  	</div>
					</div>
				<?php
			}
		}else{
			?>
				<div id="zero">
					<h1>No Data!</h1>
				</div>
			<?php
		}
	?>
	

	<div class="modal fade bs-example-modal-sm2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content2">
	      <h2>Thank You</h2>
	    </div>
	  </div>
	</div>
	<!-- Footer -->
	<div id="footer">
		&copy;2016 Endeavour Team
	</div>
</body>
</html>