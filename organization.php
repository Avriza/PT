<!DOCTYPE html>
<html>
<?php
	include("config.php");
?>
<head>
	<title>Organization</title>
	<link href="css\bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css\bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css\bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css\org.css" rel="stylesheet" type="text/css">
	<script src="js\jquery-1.12.0.js" type="text/javascript" rel="stylesheet"></script>
	<script src="js\bootstrap.min.js" type="text/javascript" rel="stylesheet"></script>
	<link href="css\font-awesome.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/logo.png">
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
				<div id="iconsearch">
					<span class="glyphicon glyphicon-search iconsearch" aria-hidden="true" style="color:#1FB899"></span>
				</div>
				<div id="input">
					<input type="text" class="form-control searchbox" id="exampleInputEmail1" placeholder="Search">
				</div>
			</div>
		</div>
		<ul>
		<strong>
			<li class="nonactive"><a href="home.php">Home</a></li>
			<li class="active"><a href="organization.php">Organization</a></li>
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

	<div>

	  <!-- Nav tabs -->
	  <ul class="nav nav-tabs" role="tablist">
	    <li role="presentation" class="active"><a href="#org" aria-controls="home" role="tab" data-toggle="tab">Organization</a></li>
	    <li role="presentation"><a href="#ukm" aria-controls="profile" role="tab" data-toggle="tab">UKM</a></li>
	  </ul>

	  <!-- Tab panes -->
	  <div class="tab-content">
	    <div role="tabpanel" class="tab-pane active" id="org">
	    <?php
	    	$sql="Select * from organisasi where jenis='himpunan'";
	    	$res=$conn->query($sql);
	    	if(mysqli_num_rows($res)>0){
	    		while ($row=mysqli_fetch_assoc($res)) {
	    			$nama=$row['nama_org'];
	    			$tgl=$row['tgl_berdiri'];
	    			$desc=$row['desc_org'];
	    			$contact=$row['contact_org'];
	    			$logo=$row['logo_org'];
	    			?>
	    				<div id="org-cont">
							<div id="header">
								<div id="picture">
									<img src="images/<?php echo $logo; ?>" alt="p1" class="img-circle" width="100px" height="100px">
								</div>
								<div id="title">
									<h4 class="name" style="color:#1FB899"><strong><?php echo $nama; ?></strong></h4>
								</div>
							</div>
							<div id="desc">
								<?php echo $desc; ?>
							</div>
							<div id="contact">
								
								<a href="#"><i class="fa fa-phone fa-lg fa-2x icon" type="button" data-toggle="tooltip" data-placement="top" title="<?php echo $contact; ?>"></i></a>
								<a href="#"><i class="fa fa-facebook fa-lg fa-2x icon" type="button" data-toggle="tooltip" data-placement="top" title="Avriza Bramantyo"></i></a>
								<a href="#"><i class="fa fa-twitter fa-lg fa-2x icon" type="button" data-toggle="tooltip" data-placement="top" title="@AvrizaB"></i></a>
								<script type="text/javascript">
									$(function () {
								  $('[data-toggle="tooltip"]').tooltip()
								})</script>
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
	    
		</div>
		<div role="tabpanel" class="tab-pane" id="ukm">
		<?php
			$sql="Select * from organisasi where jenis='ukm'";
			$res=$conn->query($sql);
			if(mysqli_num_rows($res)>0){
				while ($row=mysqli_fetch_assoc($res)) {
					$nama_ukm=$row['nama_org'];
	    			$tgl_ukm=$row['tgl_berdiri'];
	    			$desc_ukm=$row['desc_org'];
	    			$contact_ukm=$row['contact_org'];
	    			$logo_ukm=$row['logo_org'];
	    			?>
	    				<div id="org-cont">
							<div id="header">
								<div id="picture">
									<img src="images/<?php echo $logo_ukm; ?>" alt="p1" class="img-circle" width="100px" height="100px">
								</div>
								<div id="title">
									<h4 class="name" style="color:#1FB899"><strong><?php echo $nama_ukm; ?></strong></h4>
								</div>
							</div>
							<div id="desc">
								<?php echo $desc_ukm; ?>
							</div>
							<div id="contact">
								
								<a href="#"><i class="fa fa-phone fa-lg fa-2x icon" type="button" data-toggle="tooltip" data-placement="top" title="<?php echo $contact_ukm; ?>"></i></a>
								<a href="#"><i class="fa fa-facebook fa-lg fa-2x icon" type="button" data-toggle="tooltip" data-placement="top" title="Avriza Bramantyo"></i></a>
								<a href="#"><i class="fa fa-twitter fa-lg fa-2x icon" type="button" data-toggle="tooltip" data-placement="top" title="@AvrizaB"></i></a>
								<script type="text/javascript">
									$(function () {
								  $('[data-toggle="tooltip"]').tooltip()
								})</script>
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
	    	
		</div>
	</div>

	<!-- Footer -->
	<div id="footer">
		&copy;2016 Endeavour Team
	</div>
</body>
</html>