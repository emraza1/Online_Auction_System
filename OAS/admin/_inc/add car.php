<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "onlineauctionsystem";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

$car_title = $_POST['car_title'];
$car_model = $_POST['car_model'];
$make_year = $_POST['make_year'];
$car_price = $_POST['car_price'];
$btime = $_POST['btime'];
$mileage = $_POST['mileage'];
$fuel = $_POST['fuel'];
$state = $_POST['state'];
$u_id=0;


$sql = "INSERT INTO `cars`(`car_title`, `u_id`, `car_model`, `make_year`, `car_price`, `cur_price`, `btime`, `mileage`, `fuel`, `state`) VALUES ('$car_title','$u_id','$car_model','$make_year','$car_price','$car_price','$btime','$mileage','$fuel','$state')";

mysqli_query($conn,$sql);
$sql="SELECT MAX(id) as ID from cars";
$ID= mysqli_query($conn,$sql);
$ID= mysqli_fetch_assoc($ID);
$ID= $ID['ID'];
$file_name= $_FILES['car_img']['tmp_name'];
move_uploaded_file($file_name, "../../images/car_img/".$ID.".jpg");
header("Location: http://localhost/OAS/admin/view_cars.php ");