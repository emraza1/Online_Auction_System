<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "onlineauctionsystem";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

$watch_type = $_POST['watch_type'];
$watch_brand = $_POST['watch_brand'];
$watch_price = $_POST['watch_price'];
$btime = $_POST['btime'];
$gender = $_POST['gender'];
$state = $_POST['state'];
$u_id=0;

$sql = "INSERT INTO `watch`(`watch_type`, `u_id`, `watch_brand`, `watch_price`, `cur_price`, `btime`, `gender`, `state`)VALUES ('$watch_type','$u_id','$watch_brand','$watch_price','$watch_price','$btime','$gender','$state')";

mysqli_query($conn,$sql);
$sql="SELECT MAX(id) as ID from watch";
$ID= mysqli_query($conn,$sql);
$ID= mysqli_fetch_assoc($ID);
$ID= $ID['ID'];
$file_name= $_FILES['watch_img']['tmp_name'];
move_uploaded_file($file_name, "../../images/watch_img/".$ID.".jpg");
header("Location: http://localhost/OAS/admin/view_watch.php");