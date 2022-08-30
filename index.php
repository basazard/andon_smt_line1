<!DOCTYPE html>
<?php 
  include 'connect.php';
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SMT LINE 1 - AVI</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-2.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/js.js" type="text/javascript"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <audio id="audio" src="audio/alarm.mp3" preload="auto"></audio>
</head>

<body>
  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content" style="padding-top: 110px; padding-bottom: 50px;">
        <nav class="navbar navbar-expand fixed-top bg-bluedark mb-4" style="height: 100px;">
        <?php require 'navbar.php'; ?>
        </nav>
        <div class="container-fluid" style="padding-bottom: 50px;">
          <div class="row">
          <div class="col">
            <div class="row" style="width: 100%; margin-bottom: 10px;">
              <div class="row text-white" style=" width: 100%;"><h3><left><b>TOP</b></left></h3></div>
              <div class="row" style="margin-bottom: 20px;  width: 100%;">
              <?php
              $query1 = mysqli_query($connect,"SELECT * FROM smt WHERE cluster ='TOP'");
              while ( $data=mysqli_fetch_array($query1)){
                  $nostation = $data['no'];
                  $namastation = $data['name'];
                  $status = $data['status']; ?>

                  <div class='col-sm-2'>
                      <?php 
                      if ($status == 1 ){?>
                        <button id="buttontrouble" type="button" onclick="logintrouble('<?=$nostation;?>','<?=$namastation;?>')" style="background-color: green; width:100%; height:100px; margin : 2px; border-radius:10%;"><b style="font-size:18px; color: #fff; font-family:Calibri;"><?php echo $namastation ?></b></button>
                      <?php }
                      if ($status == 2){?>
                        <button id="buttonrepair" type="button" onclick="loginrepair('<?=$nostation;?>','<?=$namastation;?>')" style="background-color: red; width:100%; height:100px; margin : 2px; border-radius:10%;"><b style="font-size:18px; color: #fff; font-family:Calibri;"><?php echo $namastation ?></b></button>
                      <?php } 
                      if ($status == 3){?>
                        <form method="post" action="buttonfinish.php" onsubmit="return confirm('FINISH REPAIR ???');">
                        <input type="hidden" name="id" value="<?=$nostation;?>">
                        <input type="hidden" name="nama" value="<?=$namastation;?>">
                        <button type="submit" style="background-color:#f6c23e; width:100%; height:100px; margin : 2px; border-radius:10%;"><b style="font-size:18px; color: #fff; font-family:Calibri;"><?php echo $namastation ?></b></button>
                        </form>
                      <?php } 
                      else if ($status == 4){?>
                        <button id="buttonconfirm" type="button" onclick="loginconfirm('<?=$nostation;?>','<?=$namastation;?>')" style="background-color:#1cc88a; width:100%; height:100px; margin : 2px; border-radius:10%;"><b style="font-size:18px; color: #fff; font-family:Calibri;"><?php echo $namastation ?></b></button>
                      <?php }?>
                  </div>
              <?php }?>
              </div>

              <div class="row text-white" style="width: 100%;"><h3><left><b>BOTTOM</b></left></h3></div>
              <div class="row" style="margin-bottom: 20px; width: 100%;">
              <?php
              $query1 = mysqli_query($connect,"SELECT * FROM smt WHERE cluster ='BOTTOM'");
              while ( $data=mysqli_fetch_array($query1)){
                  $nostation = $data['no'];
                  $namastation = $data['name'];
                  $status = $data['status']; ?>

                  <div class='col-sm-2'>
                      <?php 
                      if ($status == 1 ){?>
                        <button id="buttontrouble" type="button" onclick="logintrouble('<?=$nostation;?>','<?=$namastation;?>')" style="background-color: green; width:100%; height:100px; margin : 2px; border-radius:10%;"><b style="font-size:18px; color: #fff; font-family:Calibri;"><?php echo $namastation ?></b></button>
                      <?php }
                      if ($status == 2){?>
                        <button id="buttonrepair" type="button" onclick="loginrepair('<?=$nostation;?>','<?=$namastation;?>')" style="background-color: red; width:100%; height:100px; margin : 2px; border-radius:10%;"><b style="font-size:18px; color: #fff; font-family:Calibri;"><?php echo $namastation ?></b></button>
                      <?php } 
                      if ($status == 3){?>
                        <form method="post" action="buttonfinish.php" onsubmit="return confirm('FINISH REPAIR ???');">
                        <input type="hidden" name="id" value="<?=$nostation;?>">
                        <input type="hidden" name="nama" value="<?=$namastation;?>">
                        <button type="submit" style="background-color:#f6c23e; width:100%; height:100px; margin : 2px; border-radius:10%;"><b style="font-size:18px; color: #fff; font-family:Calibri;"><?php echo $namastation ?></b></button>
                        </form>
                      <?php } 
                      else if ($status == 4){?>
                        <button id="buttonconfirm" type="button" onclick="loginconfirm('<?=$nostation;?>','<?=$namastation;?>')" style="background-color:#1cc88a; width:100%; height:100px; margin : 2px; border-radius:10%;"><b style="font-size:18px; color: #fff; font-family:Calibri;"><?php echo $namastation ?></b></button>
                      <?php }?>
                  </div>
              <?php }?>
              </div>
              <div class="row text-white" style="width: 100%;"><h3><left><b>BACK END & TEST</b></left></h3></div>
              <div class="row" style="margin-bottom: 20px; width: 100%;">
              <?php
              $query1 = mysqli_query($connect,"SELECT * FROM smt WHERE cluster ='BACK END' OR cluster='TEST'");
              while ( $data=mysqli_fetch_array($query1)){
                  $nostation = $data['no'];
                  $namastation = $data['name'];
                  $status = $data['status']; ?>

                  <div class='col-sm-2'>
                      <?php 
                      if ($status == 1 ){?>
                        <button type="button" onclick="logintrouble('<?=$nostation;?>','<?=$namastation;?>')" style="background-color: green; width:100%; height:100px; margin : 2px; border-radius:10%;"><b style="font-size:18px; color: #fff; font-family:Calibri;"><?php echo $namastation ?></b></button>
                      <?php }
                      if ($status == 2){?>
                        <button type="button" onclick="loginrepair('<?=$nostation;?>','<?=$namastation;?>')" style="background-color: red; width:100%; height:100px; margin : 2px; border-radius:10%;"><b style="font-size:18px; color: #fff; font-family:Calibri;"><?php echo $namastation ?></b></button>
                      <?php } 
                      if ($status == 3){?>
                        <form method="post" action="buttonfinish.php" onsubmit="return confirm('FINISH REPAIR ???');">
                        <input type="hidden" name="id" value="<?=$nostation;?>">
                        <input type="hidden" name="nama" value="<?=$namastation;?>">
                        <button type="submit" style="background-color:#f6c23e; width:100%; height:100px; margin : 2px; border-radius:10%;"><b style="font-size:18px; color: #fff; font-family:Calibri;"><?php echo $namastation ?></b></button>
                        </form>
                      <?php } 
                      else if ($status == 4){?>
                        <button type="button" onclick="loginconfirm('<?=$nostation;?>','<?=$namastation;?>')" style="background-color:#1cc88a; width:100%; height:100px; margin : 2px; border-radius:10%;"><b style="font-size:18px; color: #fff; font-family:Calibri;"><?php echo $namastation ?></b></button>
                      <?php }?>
                  </div>
              <?php }?>
              </div>
              </div>
          </div>
          </div>
          <div class="row mx-3">
            <?php require 'tablereport.php'; ?>
          </div>
        </div>
      </div>   
      <!-- End of Main Content -->
      <footer class="sticky-footer bg-bluedark">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; PT Astra Visteon Indonesia 2021</span>
          </div>
        </div>
      </footer>
    </div>
  </div>

<div id="modaltrouble" class="modal fade ">
  <?php require 'logintrouble.php'; ?>
</div>
<div id="modalrepair" class="modal fade ">
  <?php require 'loginrepair.php'; ?>
</div>
<div id="modalconfirm" class="modal fade ">
  <?php require 'loginconfirm.php'; ?>
</div>

<script>
  function alarm(){
    var audio = document.getElementById('audio');
    audio.play();
  }

  function logintrouble(m,n){
    $('#modaltrouble').modal('show');
    $('#idtrouble').val(m);
    $('#stationtrouble').val(n);
  }
  function loginrepair(m,n){
    $('#modalrepair').modal('show');
    $('#idrepair').val(m);
    $('#stationrepair').val(n);
  }
  function loginconfirm(m,n){
    $('#modalconfirm').modal('show');
    $('#idconfirm').val(m);
    $('#stationconfirm').val(n);
  }
</script>
<script>
$(document).ready(function(){
  $('#npktrouble').keyup(function(){
    var npkdata = $('#npktrouble').val(); 
    $.ajax({ 
      type: "POST",      
      url: "karyawan.php", 
      data: { npk: npkdata} 
    })
    .done(function( hasilajax ) { 
      var obj = JSON.parse(hasilajax);
        $('#namatrouble').val(obj.nama);
        $('#depttrouble').val(obj.dept); 
    });
  })

  $('#npkrepair').keyup(function(){
    var npkdata = $('#npkrepair').val(); 
    $.ajax({ 
      type: "POST",      
      url: "karyawan.php", 
      data: { npk: npkdata} 
    })
    .done(function( hasilajax ) { 
      var obj = JSON.parse(hasilajax);
        $('#namarepair').val(obj.nama);
        $('#deptrepair').val(obj.dept); 
    });
  })

  $('#npkconfirm').keyup(function(){
    var npkdata = $('#npkconfirm').val(); 
    $.ajax({ 
      type: "POST",      
      url: "karyawan.php", 
      data: { npk: npkdata} 
    })
    .done(function( hasilajax ) { 
      var obj = JSON.parse(hasilajax);
        $('#namaconfirm').val(obj.nama);
        $('#deptconfirm').val(obj.dept); 
    });
  })
});
</script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

</body>
</html>