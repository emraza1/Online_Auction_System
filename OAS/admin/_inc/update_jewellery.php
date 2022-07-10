<?php
include 'db.php';
$id = $_REQUEST['id'];
$jew_type = $_POST['jew_type'];
$jew_material = $_POST['jew_material'];
$jew_brand = $_POST['jew_brand'];
$jew_price = $_POST['jew_price'];
$btime = $_POST['btime'];
$state = $_POST['state'];
$sql = "UPDATE `jewellery` SET `jew_type`='$jew_type',
        `jew_material`='$jew_material',
        `jew_brand`='$jew_brand',
        `jew_price`='$jew_price',
            `btime`='$btime',
        `state`='$state' WHERE id='$id'";
mysqli_query($conn, $sql);
$file_name= $_FILES['jew_img']['tmp_name'];
move_uploaded_file($file_name, "../../images/jew_img/".$id.".jpg");
header("Location: http://localhost/OAS/admin/view_jewellery.php");
