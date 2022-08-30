<?php
include 'connect.php';
$form = $_GET['form'];
$id_trouble = $_POST['id_trouble'];
$date = $_POST['date'];
$time = $_POST['time'];
$no_station = $_POST['no_station'];
$station = $_POST['station'];
$trouble = $_POST['trouble'];
$action  = $_POST['action'];
$name = $_POST['mtc'];

if ($form == 1){
	if (isset($name) && isset($trouble) && isset($action)){
	$query=mysqli_query($connect,"INSERT INTO smt_action(no,id_trouble, date_trouble, time_trouble, no_station, nama_station, trouble, action, name) VALUES ('','$id_trouble','$date','$time','$no_station', '$station', '$trouble', '$action', '$name' ) ");
		if ($query) {?>
		<script>alert('Terimakasih atas informasinya, Selamat bekerja kembali');</script>
		<script>document.location.href='index.php'</script>
	<?php } else {?> <script> alert("GAGAL");</script>
					 <script>history.go(-1)</script> <?php }

	} else { ?>
		<script>alert('Isi form yang lengkap ya !');</script>
		<script>history.go(-1)</script>
	<?php }

} else if ($form == 2){
	if (isset($name) && isset($trouble) && isset($action)){
		$query=mysqli_query($connect,"UPDATE smt_action SET trouble='$trouble', action='$action', name='$name' WHERE id_trouble = '$id_trouble'");
		if ($query) {?>
		<script>alert('Terimakasih atas informasinya, Selamat bekerja kembali');</script>
		<script>document.location.href='index.php'</script>
	<?php } else {?> <script> alert("GAGAL UPDATE");</script> 
					 <script>history.go(-1)</script><?php }

	} else { ?>
		<script>alert('Isi form yang lengkap ya !');</script>
		<script>history.go(-1)</script>
	<?php }
}?>
