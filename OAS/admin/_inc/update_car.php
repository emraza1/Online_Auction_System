<?php
include 'db.php';
$id = $_REQUEST['id'];
$car_title = $_POST['car_title'];
$car_model = $_POST['car_model'];
$make_year = $_POST['make_year'];
$car_price = $_POST['car_price'];

$btime = $_POST['btime'];
$mileage = $_POST['mileage'];
$fuel = $_POST['fuel'];
$state = $_POST['state'];
$sql = "UPDATE `cars` SET `car_title`='$car_title',
        `car_model`='$car_model',
        `make_year`='$make_year',
        `car_price`='$car_price',
        
        `btime`='$btime',
        `mileage`='$mileage',
        `fuel`='$fuel',
        `state`='$state' WHERE id='$id'";
mysqli_query($conn, $sql);
$file_name= $_FILES['car_img']['tmp_name'];
move_uploaded_file($file_name, "../../images/car_img/".$id.".jpg");
header("Location: http://localhost/OAS/admin/view_cars.php ");

