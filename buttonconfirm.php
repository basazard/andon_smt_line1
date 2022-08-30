<?php
include 'connect.php';
$npk  = $_POST['npkconfirm'];
$nama = $_POST['namaconfirm'];
// $pass = $_POST['passconfirm'];
$dept = $_POST['deptconfirm'];

if ($dept == 'Quality' || $dept == 'Produksi'){
	$cekuser = mysqli_query($connect,"SELECT * FROM karyawan WHERE npk = '$npk' AND nama = '$nama'");
	if (mysqli_num_rows($cekuser)!=0){
		$no_station = $_POST['id'];

		$update_sta = mysqli_query($connect,"UPDATE smt SET status = 1 WHERE no='$no_station'");
		$last   = mysqli_query($connect,"SELECT MAX(id_trouble) AS last_id FROM smt_report where no_station = '$no_station'");
		$data   = mysqli_fetch_array($last);
		$lastid = $data['last_id'];
		$update_rep = mysqli_query($connect,"UPDATE smt_report SET time_confirm=current_time(), op_qual='$npk' WHERE id_trouble=$lastid");

		//Menghitung Durasi Downtime
		$select = mysqli_query($connect,"SELECT time_trouble, time_confirm FROM smt_report WHERE id_trouble = '$lastid'");
		$data = mysqli_fetch_array($select);
		if ($data['time_confirm'] < $data['time_trouble']){
			$update_dur = mysqli_query($connect,"UPDATE smt_report SET duration_all=timediff(addtime(time_confirm,'24:00:00'),time_trouble) WHERE id_trouble='$lastid'");
		} else if($data['time_confirm'] > $data['time_trouble']){
			$update_dur = mysqli_query($connect,"UPDATE smt_report SET duration_all=timediff(time_confirm,time_trouble) WHERE id_trouble='$lastid'");
		}

		if ($update_sta && $update_rep && $update_dur){?> 
			<script type="text/javascript">alert("BERSHASIL");</script><?php 
		} else {?> 
			<script type="text/javascript">alert("GAGAL INPUT");</script><?php 
		}
	} else {?>
		<script>alert('NPK and Password Not Registered !')</script><?php
	}
} else {?>
	<script>alert('Please Call Quality to Confirm Process !')</script><?php
}?>
<script>document.location.href='index.php'</script>