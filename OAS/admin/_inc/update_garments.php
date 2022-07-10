<?php
include 'db.php';
$id = $_REQUEST['id'];
$gar_type = $_POST['gar_type'];
$gar_material = $_POST['gar_material'];
$gar_brand = $_POST['gar_brand'];
$gar_price = $_POST['gar_price'];
$btime = $_POST['btime'];
$gender = $_POST['gender'];
$state = $_POST['state'];
$sql = "UPDATE `garments` SET `gar_type`='$gar_type',
        `gar_material`='$gar_material',
        `gar_brand`='$gar_brand',
        `gar_price`='$gar_price',
            `btime`='$btime',
        `gender`='$gender',
        `state`='$state' WHERE id='$id'";
mysqli_query($conn, $sql);
$file_name= $_FILES['gar_img']['tmp_name'];
move_uploaded_file($file_name, "../../images/gar_img/".$id.".jpg");
header("Location: http://localhost/OAS/admin/view_garments.php");
