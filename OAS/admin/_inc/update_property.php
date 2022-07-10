<?php
include 'db.php';
$id = $_REQUEST['id'];
$property_type = $_POST['property_type'];
$property_loc = $_POST['property_loc'];
$rooms= $_POST['rooms'];
$property_price = $_POST['property_price'];
$btime = $_POST['btime'];
$sql = "UPDATE `property` SET `property_type`='$property_type',
        `property_loc`='$property_loc',
        `rooms`='$rooms',
        `property_price`='$property_price',`btime`='$btime' WHERE id='$id'";
mysqli_query($conn, $sql);
$file_name= $_FILES['property_img']['tmp_name'];
move_uploaded_file($file_name, "../../images/property_img/".$id.".jpg");
header("Location: http://localhost/OAS/admin/view_property.php");
