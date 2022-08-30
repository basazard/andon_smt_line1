<?php
  include 'connect1.php';
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Form Trouble/Action SMT (periode).xls");
  header("Pragma: no-cache");
  header("Expires: 0");
  ob_end_clean();
?>
<p><center><b style="font-size: 24px">Report Trouble/Action SMT - AVI</b></center></p>
<div class="col-md-6">
<table>
  <tr><td><span>Periode : </span></td>
      <td><span>Tanggal </span></td>
      <td><span><?php echo $_POST["start_date"] ?> s/d <?php echo $_POST["end_date"] ?></span></td>
  </tr>
  <tr><td></td>
      <td><span>Jam </span></td>
      <td><span><?php echo $_POST["start_time"] ?> s/d <?php echo $_POST["end_time"] ?></span></td>
  </tr>
</table>
</div>
<table border="1" width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
  <thead>
	<tr style="background-color: #0089ff; text-align: left;">
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
    $query = "SELECT * FROM smt_action WHERE ";
    $query .= 'date_trouble BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" ';
    if ($_POST["start_time"] !='' && $_POST["end_date"] !=''){
      $query .= 'AND time_trouble BETWEEN "'.$_POST["start_time"].'" AND "'.$_POST["end_time"].'" ';}
    $query .= 'ORDER BY date_trouble DESC ';
    $result = mysqli_query($connect1, $query);
    while ( $data = mysqli_fetch_array($result)) { 
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