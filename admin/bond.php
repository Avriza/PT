<head>

    <title>Bond</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ticketbooked.css" rel="stylesheet">
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
                <li class="nonactive"><a href="inputOrg.php">Input Org</a></li>
                <li class="active"><a href="bond.php">Bond</a></li>
                <li class="nonactive"><a href="listAccount.php">List Account</a></li>
                <li class="logout btn-danger" ><a href="#">Logout</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
						<div id="adminis">
                        <h1><font color=#071424>Administrator</font></h1>
						</div>
						<label class="control-label">Select File</label>
<input id="input-4" name="input4[]" type="file" multiple class="file-loading">
<script>
$(document).on('ready', function() {
    $("#input-4").fileinput({showCaption: false});
});
</script>
						</div>
						</div>
						</div>
                    </div>
                </div>
            </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
