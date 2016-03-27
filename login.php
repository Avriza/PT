<?php
	include("config.php");

	$nim=$_POST['nim'];
	$pass=$_POST['pass-login'];

	$sql = "Select * FROM mahasiswa where nim='$nim' and password='$pass' ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()){
	    	setcookie('nim',$row['nim']);
	    	setcookie('username',$row['username']);
	    	setcookie('pass',$row['password']);
	    	setcookie('nama',$row['nama_mhs']);
	    	setcookie('email',$row['email']);
	    	setcookie('birthday',$row['birthday']);
	    	setcookie('telp',$row['telpon']);
	    	setcookie('address',$row['address']);
	    	header("location:home.php");
	    }
	}else{
	  echo"<script type='text/javascript'>alert('Gagal Login');</script>";
	}

?>