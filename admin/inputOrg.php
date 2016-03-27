<head>

    <title>Input Organization</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/inputOrg.css" rel="stylesheet">
    <link href="css\bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css\bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css\bootstrap-theme.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul>
			    <li class="nonactive"><a href="homeadmin.php">Home</a></li>
			    <li class="nonactive"><a href="ticketbooked.php">Ticket Booked</a></li>
			    <li class="nonactive"><a href="inputEvent.php">Input Event</a></li>
			    <li class="active"><a href="inputOrg.php">Input Org</a></li>
		        <li class="nonactive"><a href="bond.php">Bond</a></li>
			    <li class="nonactive"><a href="listAccount.php">List Account</a></li>
			    <li class="logout btn-danger" ><a href="#">Logout</a></li>
			</ul>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row" style="margin: auto">
                    <div class="col-lg-12">
						<div id="adminis">
                        <h1><font color=#071424>Administrator</font></h1>
						</div>
                        <form class="form-horizontal" role="form">
						<div id="form">
						<div class="form-group">
							<label class="control-label col-sm-2" for="nama_ukm">Organization Name:</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Enter event name">
						</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="tgl_exist">Date Exist:</label>
						<div class="col-sm-10">
						<input type="text"  class="form-control" placeholder="dd-mm-yyyy">
						</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="desc_ukm">Description:</label>
						<div class="col-sm-10">
						<textarea class="form-control" rows="5"></textarea>
						</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="kontak">Contact:</label>
						<div class="col-sm-10">
						<input type="text"class="form-control" placeholder="Ex: 081xxxxxxxxx">
						</div>
						</div>
						<div class="form-group">
						<label class="control-label col-sm-2">Organization Logo:</label>
						
						<label class = "sr-only" for = "inputfile">File input</label>
						<input type = "file" id = "inputfile">
						
						</div>
						</div>
					<div class="form-group"> 
				<div class="pull-right">
			<button type="submit" class="btn btn-primary btn-md">Pubish</button>
		</div>
	</div>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
`	

</body>

</html>
