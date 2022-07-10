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

$property_type = $_POST['property_type'];
$property_loc = $_POST['property_loc'];
$rooms= $_POST['rooms'];
$property_price = $_POST['property_price'];
$btime = $_POST['btime'];

$sql = "INSERT INTO `property`(`property_type`, `u_id`, `property_loc`, `rooms`, `property_price`,`cur_price`, `btime`) VALUES ('$property_type','$u_id','$property_loc','$rooms','$property_price','$property_price','$btime')";

mysqli_query($conn,$sql);
$sql="SELECT MAX(id) as ID from property";
$ID= mysqli_query($conn,$sql);
$ID= mysqli_fetch_assoc($ID);
$ID= $ID['ID'];
$file_name= $_FILES['property_img']['tmp_name'];
move_uploaded_file($file_name, "../images/property_img/".$ID.".jpg");
header("Location: http://localhost/OAS/property.php");