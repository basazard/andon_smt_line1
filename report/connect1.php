<?php
	$connect1 = mysqli_connect("localhost", "root", "", "andon_new")
	or die ("Gagal koneksi ke server".mysqli_error());

/*	
// cek koneksi
if (mysqli_connect_errno())
{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}*/

	if(!isset($_SESSION)){
    session_start();
}

?>