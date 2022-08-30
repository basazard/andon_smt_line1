<?php 
include 'connect1.php';
$form = $_POST['form'];

if ($form == 'addnew') {
	$newnpk  = $_POST['newnpk'];
	$newnama = $_POST['newnama'];
	$newdept = $_POST['newdept'];
	$pass	 = $_POST['newpass'];
	$pass1	 = $_POST['newpass1'];
	
	if($pass == $pass1){
		$add = mysqli_query($connect1,"INSERT INTO karyawan (npk, nama, departemen) VALUES ('$newnpk', '$newnama', '$newdept')");
		if($add){?> <script>alert('New Data Added Successfully !')</script> <?php }
	} else {?> <script>alert('Password Not Match !')</script> <?php }
}

if ($form == 'edit') {
	$editnpk  = $_POST['editnpk'];
	$editnama = $_POST['editnama'];
	$editdept = $_POST['editdept'];
	$editpass = $_POST['editpass'];
	$editpass1= $_POST['editpass1'];
	
	if($editpass == $editpass1){
		$edit = mysqli_query($connect1,"UPDATE karyawan SET nama = '$editnama', departemen = '$editdept' WHERE npk = '$editnpk'");
		if($edit){?> <script>alert('Data has been changed successfully !')</script> <?php }
	} else {?> <script>alert('Password Not Match !')</script> <?php }
}

if ($form == 'delete') {
	$delnpk  = $_POST['npk'];
	$delnama = $_POST['nama'];
	$del = mysqli_query($connect1,"DELETE FROM karyawan WHERE npk = '$delnpk' OR nama = '$delnama'");
}
?>
<script>window.location.href='index.php';</script>