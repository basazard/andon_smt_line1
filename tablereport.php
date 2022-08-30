
<?php include 'connect.php';?>
<div class="row mx-1" style="width: 100%"><h5 class="text-white">Last 5 Downtime :</h5></div>
<div class="row mx-1 bg-white" style="width: 100%; overflow-x: auto;">
<table class="table-sm table-stripped" width="100%" border="1px solid red">
    <thead>
        <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Station</th>
            <th>Repair</th>
            <th>Finish</th>
            <th>Dur_Repair</th>
            <th>Confirm</th>
            <th>Dur_Off</th>
            <th>Troubleshoot</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $select5 = mysqli_query($connect,"SELECT * FROM smt_report ORDER BY id_trouble DESC LIMIT 5");
    if (mysqli_num_rows($select5) == 0){
        echo "<tr><td colspan='9'><center>No trouble found !</center></td></tr>";
    } else if (mysqli_num_rows($select5) !=0){
        while ($data = mysqli_fetch_array($select5)){
        $idtrouble= $data['id_trouble'];
        $date     = $data['date_trouble'];
        $time     = $data['time_trouble'];
        $nostation= $data['no_station'];
        $nama     = $data['nama_station'];
        $start    = $data['start_repair'];
        $finish   = $data['finish_repair'];
        $durrepair = $data['duration_repair'];
        $confirm   = $data['time_confirm'];
        $duroff    = $data['duration_all']; 

        if ($finish == 0){($form = "NOT FINISHED");}
        else if ($finish != 0){
            $selectform = mysqli_query($connect,"SELECT id_trouble FROM smt_action WHERE id_trouble = '$idtrouble'");
            if (mysqli_num_rows($selectform) == 0){
                $form = "No Detail Inputed <a href='formrepair.php?idtrouble=$idtrouble&station=$nostation'><button class='btn btn-sm btn-danger'>Input</button></a>";}
            else if (mysqli_num_rows($selectform) !=0){
                $form = "DONE <a href='formcheck.php?idtrouble=$idtrouble&station=$nostation'><button class='btn btn-sm btn-primary'>Check</button></a>";};
        };?>
        
        <tr width='100%'>
            <td><b><?php echo $date ?></b></td>
            <td><b><?php echo $time ?></b></td>
            <td><b><?php echo $nama ?></b></td>
            <td><b><?php echo $start ?></b></td>
            <td><b><?php echo $finish ?></b></td>
            <td><b><?php echo $durrepair ?></b></td>
            <td><b><?php echo $confirm ?></b></td>
            <td><b><?php echo $duroff ?></b></td>
            <td><b><?php echo $form ?></b></td>
        </tr>
        <?php }
    }?>
    </tbody>
</table>
</div>