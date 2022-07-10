<?php
   include('../session.php');
?>
<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "onlineauctionsystem";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

$collect_title = $_POST['collect_title'];
$collect_type = $_POST['collect_type'];
$collect_price = $_POST['collect_price'];
$btime = $_POST['btime'];


$sql = "INSERT INTO `collectibles`(`collect_title`, `u_id`, `collect_type`, `collect_price`, `cur_price`, `btime`)  VALUES ('$collect_title','$u_id','$collect_type','$collect_price','$collect_price','$btime')";

mysqli_query($conn,$sql);
$sql="SELECT MAX(id) as ID from collectibles";
$ID= mysqli_query($conn,$sql);
$ID= mysqli_fetch_assoc($ID);
$ID= $ID['ID'];
$file_name= $_FILES['collect_img']['tmp_name'];
move_uploaded_file($file_name, "../images/collect_img/".$ID.".jpg");
header("Location: http://localhost/OAS/collectibles.php");