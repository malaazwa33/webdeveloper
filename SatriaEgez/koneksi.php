<?php 
	$host ="localhost";
	$db ="crud";
	$user ="root";
	$pw ="";
	$koneksi = mysqli_connect($host,$user,$pw) or mysqli_error("koneksi gagal");
	mysqli_select_db($koneksi,$db);
 ?>
