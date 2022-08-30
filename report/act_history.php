<!DOCTYPE html>
<?php
  include 'connect1.php';
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SMT - Trouble/Action Report</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-2.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
</head>

<body style="background: #ab8600;">
  <div class="d-flex flex-column">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2" style="padding: 20px;"><img class="img-fluid" src="../img/Astra Visteon.jpg" alt="logo" class="logo"></div>
        <div class="col-md-6 align-items-start">
          <h2 style="padding-top: 20px;margin-bottom: 0px; color: #fff">Downtime Report - SMT</h2>
          <p style="color: #fff">PT Astra Visteon Indonesia</p>
        </div>
        <div class="col-md-4 align-items-end text-right" style="padding: 20px;"><h3><?php require 'jam.html'; ?></h3></div>
      </div>
      <div class="card shadow mb-4">
        <div class="card-header">
          <div class="row mx-0">
            <div class="col-auto px-0"><a href="index.php"><h5 style="margin-bottom: 5px; color: grey;">SMT Report</h5></a></div>
            <span class="mx-2"> - </span>
            <div class="col-auto px-0"><a href="act_history.php"><h5 class="font-weight-bold" style="margin-bottom: 5px;">Trouble Action Report</h5></a></div>
            <div class="col">
              <div class="btn-group" style="float: right;">
                <button id="btnhome" class="btn btn-sm btn-primary active"><i class="fas fa-home"></i></button>
                <button id="btnsetting" class="btn btn-sm btn-primary"><i class="fas fa-user-cog"></i></button>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <?php require 'dataaction.php'; ?>
          <?php //require 'datauser.php'; ?>
        </div>
      </div>
    </div>
        <!-- /.container-fluid -->
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Modal Add New Karyawan -->
  <div id="addnew" class="modal fade ">       
    <div class="modal-dialog">
      <div class="modal-content" style="margin-bottom: 30%;margin-top: 40%">
          <div class="modal-header">
            <h5 class="modal-title">Masukan data baru ke system :</h5>
              <button class="close" data-dismiss="modal">&times;</button>
          </div>
        <div class="modal-body">
        <form method="post" action="formpost.php" autocomplete="off">
            <input type="hidden" name="form" value="addnew">
            <input type="text" name="newnpk" id="newnpk" class="form-control my-1" placeholder="*New NPK" maxlength="4" required />
            <input type="text" name="newnama" id="newnama" class="form-control my-1" placeholder="*New Name"required />
            <input type="text" name="newdept" id="newdept" class="form-control my-1" placeholder="*New Deptartemen"required readonly />
            <input type="password" name="newpass" id="newpass" class="form-control my-1" placeholder="*Password" maxlength="8" required />
            <input type="password" name="newpass1" id="newpass1" class="form-control my-1" placeholder="*Password Confirm" maxlength="8" required />
            <span id='message'></span>
            <input class="col-sm-2 btn-sm btn-success ml-1" type="submit" value="Add" style="float: right;" />
            <input class="col-sm-2 btn-sm btn-danger mx-1" type="button" data-dismiss="modal" value="Cancel" style="float: right;" />  
        </form>
      </div>
      </div>
    </div>      
  </div>

  <!-- Modal Edit Karyawan -->
  <div id="editkaryawan" class="modal fade ">       
    <div class="modal-dialog">
      <div class="modal-content" style="margin-bottom: 30%;margin-top: 40%">
          <div class="modal-header">
            <h5 class="modal-title">Change Data Karyawan :</h5>
              <button class="close" data-dismiss="modal">&times;</button>
          </div>
        <div class="modal-body">
        <form method="post" action="formpost.php" autocomplete="off">
            <input type="hidden" name="form" value="edit">
            <input type="text" name="editnpk" id="editnpk" class="form-control my-1" placeholder="*NPK" readonly />
            <input type="text" name="editnama" id="editnama" class="form-control my-1" placeholder="*Nama Lengkap"required /> 
            <select id="departemen" name="editdept" class="form-control my-1" required>
              <option id="option0" value="" disabled selected>- Departemen -</option>
              <option id="option1" value="Produksi">Produksi</option>
              <option id="option2" value="Eng/Mtc">Eng/Mtc</option>
              <option id="option3" value="Quality">Quality</option>
            </select>
            <input type="password" name="editpass" id="editpass" class="form-control my-1" placeholder="*Password" maxlength="8" required />
            <input type="password" name="editpass1" id="editpass1" class="form-control my-1" placeholder="*Password Confirm" maxlength="8" required />
            <span id='message1'></span>
            <input class="col-sm-2 btn-sm btn-success ml-1" type="submit" value="Edit" style="float: right;" />
            <input class="col-sm-2 btn-sm btn-danger mx-1" type="button" data-dismiss="modal" value="Cancel" style="float: right;" />  
        </form>
      </div>
      </div>
    </div>      
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="js/demo/datatables-demo.js"></script>

  <link href="datetimepicker/jquery.datetimepicker.css" rel="stylesheet" type="text/css" />
  <script src="datetimepicker/build/jquery.datetimepicker.full.min.js"></script>

  <script type="text/javascript">
      $('#start_time').datetimepicker({
        datepicker: false,
        format    : 'H:i:00',
        formatTime: 'H:i:s',
      });
      $('#end_time').datetimepicker({
        datepicker: false,
        format    : 'H:i:00',
        formatTime: 'H:i:s',
      });
      $('#start_date').datetimepicker({
        timepicker: false,
        format    : 'Y-m-d',
        formatDate: 'Y-m-d',
      });
      $('#end_date').datetimepicker({
        timepicker: false,
        format    : 'Y-m-d',
        formatDate: 'Y-m-d',
      });
  </script>

  <script type="text/javascript">
  $(document).ready(function(){
   fetch_data('no');

   function fetch_data(is_date_search, start_date='', end_date='', start_time='', end_time='')
   {
    var dataTable = $('#action').DataTable({
      scrollX: true,
      scrollCOllapse: true,
      columnDefs:[{width:50, targets:0},{width: 50, targets:1}],
      fixedColumn: true,
      "processing": true,
      "serverSide": true,
      "order" : [],
      "ajax" : {
        url :"act_daterange.php",
        type:"POST",
        data:{
        is_date_search:is_date_search, 
        start_date    :start_date, 
        end_date      :end_date,
        start_time    :start_time,
        end_time      :end_time, 
        }
      }
    });
   }

   $('#show').click(function(){
    var start_date = $('#start_date').val();
    var end_date   = $('#end_date').val();
    var start_time = $('#start_time').val();
    var end_time   = $('#end_time').val();
    if(start_date !='' && end_date !='')
    {
     $('#action').DataTable().destroy();
     fetch_data('yes', start_date, end_date, start_time, end_time);
    }
    else {alert("Both Date is Required");}
   });
  });
  </script>
  <script>
  $('#btnhome').on('click', function(){
    $(this).addClass('active');
    $('#btnsetting').removeClass('active');
    window.location.href='act_history.php';
  });

  $('#btnsetting').on('click', function(){
    $(this).addClass('active');
    $('#btnhome').removeClass('active');
    $('.card-body').load('datauser.php');
  });

  function addproduksi(){
    $('#addnew').modal('show');
    $('#newdept').val('Produksi');
  }
  function addmtc(){
    $('#addnew').modal('show');
    $('#newdept').val('Eng/Mtc');
  }
  function addquality(){
    $('#addnew').modal('show');
    $('#newdept').val('Quality');
  }
  function editmember(m,n){
    $('#editkaryawan').modal('show');
    $('#editnpk').val(m);
    $('#editnama').val(n);
  }
  function deletemember(m,n){
    var form = 'delete';
    if (confirm('Delete Data with NPK ='+m+' ?')){
      $.ajax({
      type: "POST",      
      url : "formpost.php",
      data: { npk: m, nama: n, form: form },
    }).done(function(){
      alert('Deleted Successfully !');
      window.location.href='act_history.php';
    })
    };
  }

  //New Karyawan Password Confirmation
$('#newpass, #newpass1, #editpass, #editpass1').on('keyup', function () {
  var pass = $('#newpass').val();
  var pass1= $('#newpass1').val();
  var edpass = $('#editpass').val();
  var edpass1= $('#editpass1').val();
  if (pass.length != 8) {
    $('#message').html('Please fill Out 8 digit password !').css('color', 'red');
  } else {
    if (pass == pass1) {
      $('#message').html('Password Match').css('color', 'green');
    } else {
      $('#message').html('Password Not Match').css('color', 'red');
    }
  }

  if (edpass.length != 8) {
    $('#message1').html('Please fill Out 8 digit password !').css('color', 'red');
  } else {
    if (edpass == edpass1) {
      $('#message1').html('Password Match').css('color', 'green');
    } else {
      $('#message1').html('Password Not Match').css('color', 'red');
    }
  }
  });
  </script>

</body>
</html>