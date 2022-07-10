<?php
include 'db.php';
$id = $_REQUEST['id'];
$elec_title= $_POST['elec_title'];
$elec_type = $_POST['elec_type'];
$elec_company = $_POST['elec_company'];
$elec_model = $_POST['elec_model'];
$elec_price = $_POST['elec_price'];
$btime = $_POST['btime'];
$state = $_POST['state'];
$sql = "UPDATE `electronics` SET `elec_title`='$elec_title',
        `elec_type`='$elec_type',
        `elec_company`='$elec_company',
        `elec_model`='$elec_model',
        `elec_price` = '$elec_price', 
        `btime`='$btime',
        `state`='$state' WHERE id='$id'";
mysqli_query($conn, $sql);
$file_name= $_FILES['elec_img']['tmp_name'];
move_uploaded_file($file_name, "../../images/elec_img/".$id.".jpg");
header("Location: http://localhost/OAS/admin/view_electronics.php");
