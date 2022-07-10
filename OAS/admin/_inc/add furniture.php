<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "onlineauctionsystem";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

$fur_type = $_POST['fur_type'];
$fur_pieces = $_POST['fur_pieces'];
$fur_price = $_POST['fur_price'];
$btime = $_POST['btime'];
$state = $_POST['state'];
$u_id=0;

$sql = "INSERT INTO `furniture`(`fur_type`, `u_id`, `fur_pieces`, `fur_price`, `cur_price`, `btime`, `state`) VALUES ('$fur_type','$u_id','$fur_pieces','$fur_price','$fur_price','$btime','$state')";

mysqli_query($conn,$sql);
$sql="SELECT MAX(id) as ID from furniture";
$ID= mysqli_query($conn,$sql);
$ID= mysqli_fetch_assoc($ID);
$ID= $ID['ID'];
$file_name= $_FILES['fur_img']['tmp_name'];
move_uploaded_file($file_name, "../../images/fur_img/".$ID.".jpg");
header("Location: http://localhost/OAS/admin/view_furniture.php");