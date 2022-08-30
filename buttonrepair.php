<?php
include 'connect.php';
$npk  = $_POST['npkrepair'];
$nama = $_POST['namarepair'];
// $pass = $_POST['passrepair'];
$dept = $_POST['deptrepair'];

if ($dept == 'Eng/Mtc'){
	$cekuser = mysqli_query($connect,"SELECT * FROM karyawan WHERE npk = '$npk' AND nama = '$nama'");
	if (mysqli_num_rows($cekuser)!=0){
		$no_station = $_POST['id'];

		$update_sta = mysqli_query($connect,"UPDATE smt SET status = 3 WHERE no='$no_station'");
		$last   = mysqli_query($connect,"SELECT MAX(id_trouble) AS last_id FROM smt_report WHERE no_station = '$no_station'");
		$data   = mysqli_fetch_array($last);
		$lastid = $data['last_id'];
		$update_rep = mysqli_query($connect,"UPDATE smt_report SET start_repair=current_time(), op_mtc='$npk' WHERE id_trouble='$lastid'");

		if ($update_sta && $update_rep){?>
			<script type="text/javascript">alert("BERSHASIL");</script><?php
		} else {?>
			<script type="text/javascript">alert("GAGAL INPUT");</script><?php
		}
	} else {?>
		<script>alert('NPK and Password Not Registered !')</script><?php
	}
} else {?>
	<script>alert('Just Engineer Can Start Repair Process !')</script><?php
}?>

<script>document.location.href='index.php'</script>