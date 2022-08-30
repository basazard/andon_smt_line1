<?php
include 'connect.php';
$no_station = $_POST['id'];

$update_sta = mysqli_query($connect,"UPDATE smt SET status = 4 WHERE no='$no_station'");
$last   = mysqli_query($connect,"SELECT MAX(id_trouble) AS last_id FROM smt_report  WHERE no_station = '$no_station'");
$data   = mysqli_fetch_array($last);
$lastid = $data['last_id'];
$update_rep = mysqli_query($connect,"UPDATE smt_report SET finish_repair=current_time() WHERE id_trouble=$lastid");

//Menghitung Durasi Repair
$select = mysqli_query($connect,"SELECT start_repair, finish_repair FROM smt_report WHERE id_trouble = '$lastid'");
$data = mysqli_fetch_array($select);
if($data['finish_repair'] < $data['start_repair']){
	$update_dur = mysqli_query($connect,"UPDATE smt_report SET duration_repair=timediff(addtime(finish_repair,'24:00:00'),start_repair) WHERE id_trouble='$lastid'");
} else if($data['finish_repair'] > $data['start_repair']){
	$update_dur = mysqli_query($connect,"UPDATE smt_report SET duration_repair=timediff(finish_repair,start_repair) WHERE id_trouble='$lastid'");
};

if ($update_sta && $update_rep && $update_dur){?>
	<script type="text/javascript">
		alert("BERSHASIL");
		window.location.href="formrepair.php?idtrouble=<?php echo $lastid ?>&station=<?php echo $no_station ?>";
	</script><?php }
else {?> <script type="text/javascript">alert("GAGAL INPUT");</script> <?php }

?>
<script>document.location.href='index.php'</script>
