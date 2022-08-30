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
  <title>SMT - AVI</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-2.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/js.js" type="text/javascript"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <audio id="audio" src="audio/alarm.mp3" preload="auto"></audio>
  <script>
    function startRefresh() { $.get('', function(data) { $(document.body).html(data); }); } $(function() { setTimeout(startRefresh,3000); });

  /*
    function autoRefresh()
    {
        window.location = window.location.href;
    }
     setInterval('autoRefresh()', 3000);
    */</script>
</head>

<body>
  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content" style="padding-top: 75px; padding-bottom: 50px;">
        <nav class="navbar navbar-expand fixed-top bg-bluedark mb-4" style="height: 100px;">
        <?php require 'navbar.php'; ?>
        </nav>
        <div class="container-fluid" style="padding-bottom: 50px;">
          <div class="row">

            <div class="row mx-3" style="width: 100%; height: 300px ;margin-bottom: 10px;">
              <div class="card" style="width: 100%">
                <div class="card-header py-0">
                  <div class="row" style="width: 100%;"><h3 style="color: #000; font-family: Calibri;"><left><b>SMT TROUBLE LIST :</b></left></h3></div>
                </div>
                <div class="card-body">
                  <div class="row" style="width: 100%; height: 200px; overflow-y: auto;">
                  <table class="table" width="100%" style="color: white;">
                    <?php 
                    $query2 = mysqli_query($connect,"SELECT * FROM smt WHERE status != 1 ORDER BY status DESC");
                    if (mysqli_num_rows($query2) == 0){
                      echo "<tr><td><center style='color:#000;'>No trouble found !</center></td></tr>";
                    } else if (mysqli_num_rows($query2) != 0){
                      while ($data = mysqli_fetch_array($query2)) {
                        $namasta = $data['name'];
                        $cluster = $data['cluster'];
                        $status  = $data['status'];
                        if ($status == 2){ $table = "<td>TROUBLE</td>";} 
                        if ($status == 3){ $table = "<td>in REPAIR</td>";}
                        if ($status == 4){ $table = "<td>wait for CONFIRM</td>";}
                        ?>
                        <tr id="data" style="font-weight: bold; border-bottom: 1px solid black">
                          <td><?= $namasta?></td>
                          <td><?= $cluster?></td>
                          <?php echo $table ?>
                        </tr>

                      <?php }
                    }?>
                  </table>
                  </div>
                </div>
              </div>
            </div>

          <div class="row mx-3" style="width: 100%">
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

<script>
  function alarm(){
    var audio = document.getElementById('audio');
    audio.play();
  }
</script>
<script>
	$(function(){
  $("tr#data").each(function(){
    var col_val = $(this).find("td:eq(2)").text();
    if (col_val == "TROUBLE"){
      $(this).css('background-color','red');
    } else if (col_val == "in REPAIR"){
      $(this).css('background-color','#f6c23e');
      $(this).css('color','black');
    } else if (col_val == "wait for CONFIRM"){
      $(this).css('background-color','#1cc88a');
    }
  });
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