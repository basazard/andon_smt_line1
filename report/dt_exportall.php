<?php
  include 'connect1.php';
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Andon-SMT.xls");
  header("Pragma: no-cache");
  header("Expires: 0");
  ob_end_clean();
?>
<p><center><b style="font-size: 24px">Report Downtime SMT - AVI</b></center></p>
<table border="1" width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
  <thead>
	<tr style="background-color: #0089ff; text-align: left;">
    <th>Date</th>
    <th>Time Trouble</th>
    <th>Op-Production</th>
    <th>Station</th>
    <th>Start Repair</th>
    <th>Finish Repair</th>
    <th>Duration Repair</th>
    <th>Op-Maintenance</th>
    <th>Time Confirmation</th>
    <th>Duration Off</th>
    <th>Approval</th>
	</tr>
	</thead>
	<tbody style="font-size: 14px;">
    <?php
    include 'connect1.php';
    $query = mysqli_query($connect1,"SELECT * FROM smt_report ORDER BY date_trouble DESC");
    while ( $data = mysqli_fetch_array($query)) { 
      $date = $data['date_trouble'];
      $time = $data['time_trouble'];
      $prod = $data['op_prod'];
      $station = $data['nama_station'];
      $start = $data['start_repair'];
      $finish = $data['finish_repair'];
      $duration = $data['duration_repair'];
      $mtc = $data['op_mtc'];
      $confirm = $data['time_confirm'];
      $durationoff = $data['duration_all'];
      $qual = $data['op_qual'];

      $op1 = mysqli_query($connect1,"SELECT nama FROM karyawan WHERE npk = '$prod'");
      $op2 = mysqli_query($connect1,"SELECT nama FROM karyawan WHERE npk = '$mtc'");
      $op3 = mysqli_query($connect1,"SELECT nama, departemen FROM karyawan WHERE npk = '$qual'");
      $result1 = mysqli_fetch_array($op1);
      $result2 = mysqli_fetch_array($op2);
      $result3 = mysqli_fetch_array($op3);
      $namaop1 = $result1['nama'];
      $namaop2 = $result2['nama'];
      if ($result3['departemen'] == 'Eng/Mtc'){$namaop3 = 'Eng-'.$result3['nama'];}
      else if ($result3['departemen'] == 'Quality'){$namaop3 = 'QC  -'.$result3['nama'];}
      else {$namaop3 = '';}
      {
      echo "
      <tr cellpadding='1px'>
        <td>$date</td>
        <td>$time</td>
        <td>$namaop1</td>
        <td>$station</td>
        <td>$start</td>
        <td>$finish</td>
        <td>$duration</td>
        <td>$namaop2</td>
        <td>$confirm</td>
        <td>$durationoff</td>
        <td>$namaop3</td>
      </tr>";
      };
    }?>
  </tbody>
</table>