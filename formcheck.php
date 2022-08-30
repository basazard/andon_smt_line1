 <?php
include "connect.php";
$no_station = $_GET['station'];
$id_trouble = $_GET['idtrouble'];
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, shrink-to-fit=no">
  <title>Form Trouble/Action - SMT</title>
  <link href="css/sb-admin-2.css" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/js.js" type="text/javascript"></script>
  <script src="vendor/jquery/jquery.min.js"></script>

</head>
<body>
<nav class="navbar navbar-expand fixed-top bg-bluedark mb-4" style="height: 100px;">
  <?php require 'navbar.php'; ?>
</nav>
<div class="d-flex align-items-center min-vh-100">
      <div id="content" style="padding-top: 110px; padding-bottom: 20px; width: 100%">
        <div class="container" style="padding-left: 10%; padding-right: 10%;">
          <div class="row" style="width: 100%">
            <div class="card" style="width: 100%; margin-bottom: 50px;">
              <div class="card-header"><h4> Form Trouble Action - SMT</h4></div>
              <div class="card-body">
                <form method='post' action='formpost.php?form=2' autocomplete='off' onsubmit="return confirm('Anda sudah yakin dengan data yang anda masukkan ?');">
                <?php
                $query = mysqli_query($connect,"SELECT * FROM smt_action WHERE id_trouble = '$id_trouble' AND no_station = '$no_station'");
                if(mysqli_num_rows($query) != 0){
                  $data1=mysqli_fetch_array($query);
                  $id_trouble   = $data1['id_trouble'];
                  $date_trouble = $data1['date_trouble'];
                  $time_trouble = $data1['time_trouble'];
                  $no_station   = $data1['no_station'];
                  $nama_station = $data1['nama_station'];
                  $trouble      = $data1['trouble'];
                  $action       = $data1['action'];
                  $mtc          = $data1['name'];             
                  } ?>
                  <input type='hidden' name='id_trouble' value='<?=$id_trouble?>'>
                  <input type='hidden' name='no_station' value='<?=$no_station?>'>

                  <div class="row text-danger">
                    <div class="col-md-6">
                      <table>
                      <tr><td>Nama Station</td>
                          <td> : </td>
                          <td><input type="text" name="station" id="station" class="form-control bg-white" value="<?=$nama_station?>" readonly /></td></tr>
                      <tr><td>Nama MTC</td>
                          <td> : </td>
                          <td><input type="text" name="mtc" id="mtc" class="form-control bg-white" value="<?=$mtc?>" style='text-transform: capitalize;' readonly /></td></tr>
                      </table>                        
                    </div>
                    <div class="col-md-6">
                      <table>
                      <tr><td>Tanggal</td>
                          <td> : </td>
                          <td><input type="text" name="date" id="date" class="form-control bg-white" value="<?=$date_trouble?>" readonly /></td></tr>
                      <tr><td>Waktu Trouble</td>
                          <td> : </td>
                          <td><input type="text" name="time" id="time" class="form-control bg-white" value="<?=$time_trouble?>" readonly /></td></tr>
                      
                      </table>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label for="trouble">Trouble</label>
                      <textarea name='trouble' id='trouble' rows='5' class='form-control rounded-0' maxlength="100" style='text-transform: capitalize;' readonly><?php echo $trouble ?></textarea><br />
                    </div>
                    <div class="col-md-6">
                      <label for="action">Action</label>
                      <textarea name='action' id='action' rows='5' class='form-control rounded-0' maxlength="100" style='text-transform: capitalize;' readonly><?php echo $action ?></textarea><br />
                    </div>
                  </div>
                  <div class="row d-flex flex-row-reverse py-1 px-0">
                  <input class="col-sm-1 btn btn-sm btn-secondary mx-1" type="submit" name="submit" id="submit" value="Submit" disabled />
                  <input class="col-sm-1 btn btn-sm btn-secondary mx-1" type="reset" name="reset" id="reset" value="Reset" disabled />
                  <input class="col-sm-1 btn btn-sm btn-primary mx-1" type="button" name="edit" id="edit" value="Edit" onclick="editform()" />
                  </div>
                </form>
              </div>
            </div>
          </div>
          
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

<script>
  function editform(){
    if (confirm('Edit Form ?')){
      $('#trouble,#action').removeAttr('readonly');
      $('#trouble,#action').prop('required',true);
      $('#trouble').focus();
      $('#submit,#reset').removeAttr('disabled');
      $('#submit,#reset').removeClass('btn-secondary');
      $('#submit').addClass('btn-success');
      $('#reset').addClass('btn-danger');
      
    };
  };
</script>
</body>
</html>