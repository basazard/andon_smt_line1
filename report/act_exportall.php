<?php
  include 'connect1.php';
  //header("Content-type: application/vnd-ms-excel");
  //header("Content-Disposition: attachment; filename=Form Trouble/Action SMT.xls");
  //header("Pragma: no-cache");
  //header("Expires: 0");
  //ob_end_clean();
?>
<p><center><b style="font-size: 24px">Report Trouble/Action SMT - AVI</b></center></p>
<table border="1" width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
  <thead>
	<tr style="background-color: #0089ff; text-align: left">
    <th>Date</th>
    <th>Time Trouble</th>
    <th>Station</th>
    <th>MTC</th>
    <th>Trouble</th>
    <th>Action</th>
	</tr>
	</thead>
	<tbody style="font-size: 14px;">
    <?php
    include 'connect1.php';
    $query = mysqli_query($connect1,"SELECT * FROM smt_action ORDER BY date_trouble DESC");
    while ( $data = mysqli_fetch_array($query)) { 
      $date=$data['date_trouble'];
      $time=$data['time_trouble'];
      $station=$data['nama_station'];
      $nama=$data['name'];
      $trouble=$data['trouble'];
      $action=$data['action'];
      {
      echo "
      <tr cellpadding='1px'>
        <td>$date</td>
        <td>$time</td>
        <td>$station</td>
        <td>$nama</td>
        <td>$trouble</td>
        <td>$action</td>
      </tr>";
      };
    }?>
  </tbody>
</table>