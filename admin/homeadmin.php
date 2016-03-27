<head>

    <title>Home Admin</title>
    <link href="css\bootstrap.min.css" rel="stylesheet">
    <link href="css\homeadmin.css" rel="stylesheet">
    <link href="css\bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css\bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css\bootstrap-theme.min.css" rel="stylesheet" type="text/css">
</head>

<body>		
    <div id="wrapper">
		
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul>
			    <li class="active"><a href="homeadmin.php">Home</a></li>
			    <li class="nonactive"><a href="ticketbooked.php">Ticket Booked</a></li>
			    <li class="nonactive"><a href="inputEvent.php">Input Event</a></li>
			    <li class="nonactive"><a href="inputOrg.php">Input Org</a></li>
		        <li class="nonactive"><a href="bond.php">Bond</a></li>
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
						<table class="table">
						<tbody>
						<tr>
						<td>Event yang sedang berlangsung</td>
							<td>Himpunan</td>
							<td><div class="pull-right">
							<div class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-plus-sign"></span> 
							<xp:link id="expandLink" > <xp:eventHandler event="onclick" submit="true" refreshMode="partial" refreshId="thisValue"> 
							<xp:this.action><![CDATA[#{javascript:viewScope.vsTest = "Test"}]]></xp:this.action> </xp:eventHandler> </xp:link> 
							</div>
							<strong>1</strong>
							<div class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-minus-sign"></span> 
							<xp:link id="expandLink" > <xp:eventHandler event="onclick" submit="true" refreshMode="partial" refreshId="thisValue"> 
							<xp:this.action><![CDATA[#{javascript:viewScope.vsTest = "Test"}]]></xp:this.action> </xp:eventHandler> </xp:link> 
							</div> 
							<div class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-remove-sign"></span> 
							<xp:link id="expandLink" > <xp:eventHandler event="onclick" submit="true" refreshMode="partial" refreshId="thisValue"> 
							<xp:this.action><![CDATA[#{javascript:viewScope.vsTest = "Test"}]]></xp:this.action> </xp:eventHandler> </xp:link> 
							</div> 
							</div>
							</td>
							</tr>
							<tr>
							<td>Event yang sedang berlangsung 2</td>
							<td>Himpunan</td>
							<td><div class="pull-right">
							<div class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-plus-sign"></span> 
							<xp:link id="expandLink" > <xp:eventHandler event="onclick" submit="true" refreshMode="partial" refreshId="thisValue"> 
							<xp:this.action><![CDATA[#{javascript:viewScope.vsTest = "Test"}]]></xp:this.action> </xp:eventHandler> </xp:link> 
							</div>
							<strong>1</strong>
							<div class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-minus-sign"></span> 
							<xp:link id="expandLink" > <xp:eventHandler event="onclick" submit="true" refreshMode="partial" refreshId="thisValue"> 
							<xp:this.action><![CDATA[#{javascript:viewScope.vsTest = "Test"}]]></xp:this.action> </xp:eventHandler> </xp:link> 
							</div> 
							<div class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-remove-sign"></span> 
							<xp:link id="expandLink" > <xp:eventHandler event="onclick" submit="true" refreshMode="partial" refreshId="thisValue"> 
							<xp:this.action><![CDATA[#{javascript:viewScope.vsTest = "Test"}]]></xp:this.action> </xp:eventHandler> </xp:link> 
							</div> 
							</div>
							</td>
							</tr>
						<tr>
							<td>Event yang sedang berlangsung 3</td>
							<td>Himpunan</td>
							<td><div class="pull-right">
							<div class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-plus-sign"></span> 
							<xp:link id="expandLink" > <xp:eventHandler event="onclick" submit="true" refreshMode="partial" refreshId="thisValue"> 
							<xp:this.action><![CDATA[#{javascript:viewScope.vsTest = "Test"}]]></xp:this.action> </xp:eventHandler> </xp:link> 
							</div>
							<strong>1</strong>
							<div class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-minus-sign"></span> 
							<xp:link id="expandLink" > <xp:eventHandler event="onclick" submit="true" refreshMode="partial" refreshId="thisValue"> 
							<xp:this.action><![CDATA[#{javascript:viewScope.vsTest = "Test"}]]></xp:this.action> </xp:eventHandler> </xp:link> 
							</div> 
							<div class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-remove-sign"></span> 
							<xp:link id="expandLink" > <xp:eventHandler event="onclick" submit="true" refreshMode="partial" refreshId="thisValue"> 
							<xp:this.action><![CDATA[#{javascript:viewScope.vsTest = "Test"}]]></xp:this.action> </xp:eventHandler> </xp:link> 
							</div> 
							</div>
							</td>
							</tr>
							<tr>
							<td>Event yang sedang berlangsung 4</td>
							<td>Himpunan</td>
							<td><div class="pull-right">
							<div class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-plus-sign"></span> 
							<xp:link id="expandLink" > <xp:eventHandler event="onclick" submit="true" refreshMode="partial" refreshId="thisValue"> 
							<xp:this.action><![CDATA[#{javascript:viewScope.vsTest = "Test"}]]></xp:this.action> </xp:eventHandler> </xp:link> 
							</div>
							<strong>1</strong>
							<div class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-minus-sign"></span> 
							<xp:link id="expandLink" > <xp:eventHandler event="onclick" submit="true" refreshMode="partial" refreshId="thisValue"> 
							<xp:this.action><![CDATA[#{javascript:viewScope.vsTest = "Test"}]]></xp:this.action> </xp:eventHandler> </xp:link> 
							</div> 
							<div class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-remove-sign"></span> 
							<xp:link id="expandLink" > <xp:eventHandler event="onclick" submit="true" refreshMode="partial" refreshId="thisValue"> 
							<xp:this.action><![CDATA[#{javascript:viewScope.vsTest = "Test"}]]></xp:this.action> </xp:eventHandler> </xp:link> 
							</div> 
							</div>
							</td>
							
						</tr>
						
					</tbody>
				</table>
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
