<?php include 'connect1.php'; ?>
<table width="100%" >
  <tr><td>
      <div class="row mx-0" style="margin-bottom: 5px;"><span class="py-2"> Periode : </span>
        <div class="col-md-11">
        <form action="act_exportperiode.php" method="POST" autocomplete="off">
          <div class="row mx-0">
            <div class="col-sm-3"><input type="text" name="start_date" id="start_date" class="form-control" placeholder="Start Date" required></div>
            <span class="py-2">-</span>
            <div class="col-sm-3"><input type="text" name="end_date" id="end_date" class="form-control" placeholder="End Date" required></div>
            <span class="py-2"> and </span>
            <div class="col-sm-2"><input type="text" name="start_time" id="start_time" class="form-control" placeholder="Start Time"></div>
            <span class="py-2">-</span>
            <div class="col-sm-2"><input type="text" name="end_time" id="end_time" class="form-control" placeholder="End Time"></div>
          </div>
        </div>
      </div>
      </td>
      <td align="right">
        <div class="btn-group btn-group-md">
          <button type="button" name="show" id="show" class="btn btn-primary">Show</button>
          <button type="submit" name="exportperiode" id="export" class="btn btn-primary">Export</button></form>
          <form class="btn-group" method="POST" action="act_exportall.php">
          <button type="submit" name="export" id="exportall" class="btn btn-primary">Export All</button></form>                   
        </div>
      </td>          
  </tr>
</table>

<table id="action" class="responsive display nowrap" cellspacing="0" width="100%" style="font-size: 12px">
  <thead style="column-width: 10px; background-color: grey;">
    <tr style="height: 40px">
      <th>Date</th>
      <th>Time Trouble</th>
      <th>Station</th>
      <th>MTC</th>
      <th>Trouble</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include 'connect1.php';
    $query = mysqli_query($connect1,"SELECT * FROM smt_action ORDER BY no DESC");
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