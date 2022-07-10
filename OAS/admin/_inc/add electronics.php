<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "onlineauctionsystem";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

$elec_title= $_POST['elec_title'];
$elec_type = $_POST['elec_type'];
$elec_company = $_POST['elec_company'];
$elec_model = $_POST['elec_model'];
$elec_price = $_POST['elec_price'];
$btime = $_POST['btime'];
$state = $_POST['state'];
$u_id=0;


$sql = "INSERT INTO `electronics`(`elec_title`, `u_id`, `elec_type`, `elec_company`, `elec_model`, `elec_price`,`cur_price`, `btime`, `state`)VALUES ('$elec_title','$u_id','$elec_type','$elec_company','$elec_model','$elec_price','$elec_price','$btime','$state')";

mysqli_query($conn,$sql);
$sql="SELECT MAX(id) as ID from electronics";
$ID= mysqli_query($conn,$sql);
$ID= mysqli_fetch_assoc($ID);
$ID= $ID['ID'];
$file_name= $_FILES['elec_img']['tmp_name'];
move_uploaded_file($file_name, "../../images/elec_img/".$ID.".jpg");
header("Location: http://localhost/OAS/admin/view_electronics.php");