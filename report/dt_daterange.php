
<?php
$connect = mysqli_connect("localhost", "root", "", "andon_new");
$columns = array('date_trouble', 'time_trouble', 'nama_station', 'start_repair', 'finish_repair', 'duration_repair', 'time_confirm', 'duration_all');

$query = "SELECT * FROM smt_report WHERE ";

if($_POST["is_date_search"] == "yes"){
 $query .= 'date_trouble BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
 
 if ($_POST["start_time"] !='' && $_POST["end_date"] !=''){
  $query .= ' time_trouble BETWEEN"'.$_POST["start_time"].'" AND "'.$_POST["end_time"].'" AND ';
 }
 }

if(isset($_POST["search"]["value"])){
 $query .= '
  (date_trouble LIKE "%'.$_POST["search"]["value"].'%" 
  OR time_trouble LIKE "%'.$_POST["search"]["value"].'%" 
  OR nama_station LIKE "%'.$_POST["search"]["value"].'%")
 ';}

if(isset($_POST["order"])){
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
 }else{
 $query .= 'ORDER BY id_trouble DESC ';
 }

$query1 = '';
if($_POST["length"] != -1){
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
 }

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));
$result = mysqli_query($connect, $query . $query1);
$data = array();
while($row = mysqli_fetch_array($result))
{

 $sub_array = array();
 $sub_array[] = $row["date_trouble"];
 $sub_array[] = $row["time_trouble"];
 $sub_array[] = $row["nama_station"];
 $sub_array[] = $row["start_repair"];
 $sub_array[] = $row["finish_repair"];
 $sub_array[] = $row["duration_repair"];
 $sub_array[] = $row["time_confirm"];
 $sub_array[] = $row["duration_all"];
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM smt_report";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);



?>