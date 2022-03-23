<?php include "connection.php";?>
<?php
if(isset($_POST['id'])){
  $id = $_POST['id'];
$sql1 = "SELECT * FROM app WHERE id = '$id'";
$result1 = mysqli_query($conn, $sql1);
if(mysqli_num_rows($result1)>0){
  $row1 = mysqli_fetch_assoc($result1);
  if(count($row1)>0) {
    $data_a['id'] = $row1['id'];
    $data_a['app_name'] = $row1['app_name'];
    $img = $row1['app_dir'];
    $data_a['img'] = "<img src='https://".$img."' alt='".$row1['app_name']."'>";
}

echo json_encode($data_a);
}
}
?>
<?php
if(isset($_POST['id_w'])){
  $id_w = $_POST['id_w'];
$sql1 = "SELECT * FROM wallet WHERE id = '$id_w'";
$result1 = mysqli_query($conn, $sql1);
if(mysqli_num_rows($result1)>0){
  $row1 = mysqli_fetch_assoc($result1);
  if(count($row1)>0) {
    $data_w['id'] = $row1['id'];
    $data_w['w_name'] = $row1['w_name'];
    $img_w = $row1['w_dir'];
    $data_w['img'] = "<img src='https://".$img_w."' alt='".$row1['w_name']."'>";
}

echo json_encode($data_w);
}
}
?>
