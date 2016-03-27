<?php
	include("config.php");

	$username=$_POST['username-reg'];
	$password=$_POST['password-reg'];
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$birthday=$_POST['birthday'];
	$telp=$_POST['telp'];
	$address=$_POST['address'];
	$nim=$_POST['nim'];
	$confirmpass=$_POST['confirmpass'];
		
		$sql="Insert into mahasiswa (nim, username, password, nama_mhs, email, birthday, telpon, address) values ($nim,'$username','$password','$nama','$email',$birthday,'$telp','$address')";
	
	if($conn->query($sql)===true){
		echo"<script type='text/javascript'>alert('Succesful');</script>";
		
	}else{
		echo"<script type='text/javascript'>alert('Gagal');</script>";
	}
	/* Belum validasi nim*/
	/* Belum validasi username*/
	/* Belum validasi email*/
?>