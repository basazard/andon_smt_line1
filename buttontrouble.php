<?php
include 'connect.php';
$npk  = $_POST['npktrouble'];
$nama = $_POST['namatrouble'];
// $pass = $_POST['passtrouble'];
$dept = $_POST['depttrouble'];

if ($dept == 'Produksi'){
	$cekuser = mysqli_query($connect,"SELECT * FROM karyawan WHERE npk = '$npk' AND nama = '$nama'");
	if (mysqli_num_rows($cekuser)!=0){
		$no_station = $_POST['id'];
		$nama_station = $_POST['nama'];
		$update_sta = mysqli_query($connect,"UPDATE smt SET status= 2 WHERE no='$no_station'");
		$insert_rep = mysqli_query($connect,"INSERT INTO smt_report(id_trouble, date_trouble, time_trouble, op_prod, no_station, nama_station) VALUES ('',current_date(), current_time(), '$npk', '$no_station', '$nama_station' ) ");

		if ($update_sta && $insert_rep){?>
			<script type="text/javascript">alert("BERSHASIL");</script><?php 
		} else {?> 
			<script type="text/javascript">alert("GAGAL INPUT");</script> <?php 
		}
	} else {?>
		<script>alert('NPK and Password Not Registered !')</script><?php
	}
} else {?>
	<script>alert('Button Trouble Just For Production Member !')</script><?php
} ?>

<script>window.location.href='index.php';</script>
