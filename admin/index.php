<<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link href="..\css\bootstrap.css" rel="stylesheet" type="text/css">
	<link href="..\css\bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="..\css\bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="..\css\admin.css" rel="stylesheet" type="text/css">
	<script src="..\js\jquery-1.12.0.js" type="text/javascript" rel="stylesheet"></script>
	<script src="..\js\bootstrap.min.js" type="text/javascript" rel="stylesheet"></script>
</head>
<body>
	<div id="container">
		<h2 style="text-align:canter"><strong>Administrator</strong></h2>
		<form class="form-horizontal">
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label" style="color:white" name="username">Username</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="inputEmail3" placeholder="Username">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label" style="color:white" name="password">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <div class="checkbox">
		        <label>
		          <input type="checkbox" style="color:white"> Remember me
		        </label>
		      </div>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn"><a href="#">Sign in</a></button>
		    </div>
		  </div>
		</form>
	</div>
</body>
</html>