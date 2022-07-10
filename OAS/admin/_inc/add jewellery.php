<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "onlineauctionsystem";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

$jew_type = $_POST['jew_type'];
$jew_material = $_POST['jew_material'];
$jew_brand = $_POST['jew_brand'];
$jew_price = $_POST['jew_price'];
$btime = $_POST['btime'];
$state = $_POST['state'];
$u_id=0;

$sql = "INSERT INTO `jewellery`(`jew_type`, `u_id`, `jew_material`, `jew_brand`, `jew_price`, `cur_price`, `btime`, `state`) VALUES ('$jew_type','$u_id','$jew_material','$jew_brand','$jew_price','$jew_price','$btime','$state')";

mysqli_query($conn,$sql);
$sql="SELECT MAX(id) as ID from jewellery";
$ID= mysqli_query($conn,$sql);
$ID= mysqli_fetch_assoc($ID);
$ID= $ID['ID'];
$file_name= $_FILES['jew_img']['tmp_name'];
move_uploaded_file($file_name, "../../images/jew_img/".$ID.".jpg");
header("Location: http://localhost/OAS/admin/view_jewellery.php");