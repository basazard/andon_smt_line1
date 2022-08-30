<?php include 'connect1.php'; ?>
<div class="row mx-0">
    <div class="col-md-4">
        <div class="row mx-0" style="width: 100%">
            <div class="col px-0"><span>Produksi : </span></div>
            <div class="col">
                <button class="btn btn-sm" style="float: right; color: black" onclick="addproduksi()"><i class="fas fa-plus-square"></i> New</button>
            </div>
        </div>
        <div style="overflow-y: auto; height: 420px">
            <table class="table table-striped table-hover">
                <?php 
                $no = 0;
                $query = mysqli_query($connect1,"SELECT * FROM karyawan WHERE departemen='Produksi'");
                while($data = mysqli_fetch_array($query)){ 
                    $npk  = $data['npk'];
                    $nama = $data['nama'];
                    $no++;
                    if ($npk <= 9){ $npk1 = '000'.$npk; }
                    else if ($npk > 9 && $npk <= 99) { $npk1 = '00'.$npk; }
                    else if ($npk > 99 && $npk <= 999) { $npk1 = '0'.$npk; }
                    else if ($npk > 999) { $npk1 = $npk; } ?>
                    <tr>
                        <td width="5%" style="text-align: right;"><b><?=$no?></b></td>
                        <td width="10%" style="text-align: right;"><?=$npk1?></td>
                        <td><?=$nama?></td>
                        <td width="3%"><button class="btn btn-sm" onclick="editmember('<?=$npk?>','<?=$nama?>')"><i class="fas fa-edit"></i></button></td>
                        <td width="3%"><button class="btn btn-sm" onclick="deletemember('<?=$npk?>','<?=$nama?>')"><i class="fas fa-times"></i></button></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row mx-0" style="width: 100%">
            <div class="col px-0"><span>Engineer/MTC : </span></div>
            <div class="col">
                    <button class="btn btn-sm" style="float: right; color: black" onclick="addmtc()"><i class="fas fa-plus-square"></i>New</button>
            </div>
        </div>
        <div style="overflow-y: auto; height: 420px">
            <table class="table table-striped table-hover">
                <?php 
                $no = 0;
                $query = mysqli_query($connect1,"SELECT * FROM karyawan WHERE departemen='Eng/Mtc'");
                while($data = mysqli_fetch_array($query)){
                  	$npk  =$data['npk'];
                  	$nama =$data['nama'];
                   	$no++;
                   	if ($npk <= 9){ $npk1 = '000'.$npk; }
                  	else if ($npk > 9 && $npk <= 99) { $npk1 = '00'.$npk; }
                  	else if ($npk > 99 && $npk <= 999) { $npk1 = '0'.$npk; }
                   	else if ($npk > 999) {$npk1 = $npk;} ?>
                   	<tr>
                      	<td width="5%" style="text-align: right;"><b><?=$no?></b></td>
                       	<td width="10%" style="text-align: right;"><?=$npk1?></td>
                       	<td><?=$nama?></td>
                       	<td width="3%"><button class="btn btn-sm" onclick="editmember('<?=$npk?>','<?=$nama?>')"><i class="fas fa-edit"></i></button></td>
                       	<td width="3%"><button class="btn btn-sm" onclick="deletemember('<?=$npk?>','<?=$nama?>')"><i class="fas fa-times"></i></button></td>
                   	</tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row mx-0" style="width: 100%">
            <div class="col px-0"><span>Quality : </span></div>
            <div class="col">
                <button class="btn btn-sm" style="float: right; color: black" onclick="addquality()"><i class="fas fa-plus-square"></i> New</button>
            </div>
        </div>
        <div style="overflow-y: auto; height: 420px">
            <table class="table table-striped table-hover">
                <?php
                $no = 0;
                $query = mysqli_query($connect1,"SELECT * FROM karyawan WHERE departemen='Quality'");
                while($data = mysqli_fetch_array($query)){ 
                    $npk  = $data['npk'];
                    $nama = $data['nama'];
                    $no++;
                    if ($npk <= 9){ $npk1 = '000'.$npk; }
                    else if ($npk > 9 && $npk <= 99) { $npk1 = '00'.$npk; }
                    else if ($npk > 99 && $npk <= 999) { $npk1 = '0'.$npk; }
                    else if ($npk > 999) {$npk1 = $npk;} ?>
                    <tr>
                        <td width="5%" style="text-align: right;"><b><?=$no?></b></td>
                        <td width="10%" style="text-align: right;"><?=$npk1?></td>
                        <td><?=$nama?></td>
                        <td width="3%"><button class="btn btn-sm" onclick="editmember('<?=$npk?>','<?=$nama?>')"><i class="fas fa-edit"></i></button></td>
                        <td width="3%"><button class="btn btn-sm" onclick="deletemember('<?=$npk?>','<?=$nama?>')"><i class="fas fa-times"></i></button></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>