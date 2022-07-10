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

$gar_type = $_POST['gar_type'];
$gar_material = $_POST['gar_material'];
$gar_brand = $_POST['gar_brand'];
$gar_price = $_POST['gar_price'];
$btime = $_POST['btime'];
$gender = $_POST['gender'];
$state = $_POST['state'];

$sql = "INSERT INTO `garments`(`gar_type`, `u_id`, `gar_material`, `gar_brand`, `gar_price`, `cur_price`, `btime`, `gender`, `state`) VALUES ('$gar_type','$u_id','$gar_material','$gar_brand','$gar_price','$gar_price','$btime','$gender','$state')";

mysqli_query($conn,$sql);
$sql="SELECT MAX(id) as ID from garments";
$ID= mysqli_query($conn,$sql);
$ID= mysqli_fetch_assoc($ID);
$ID= $ID['ID'];
$file_name= $_FILES['gar_img']['tmp_name'];
move_uploaded_file($file_name, "../images/gar_img/".$ID.".jpg");
header("Location: http://localhost/OAS/garments.php");