<?php
include 'db.php';
$id = $_REQUEST['id'];
$collect_title = $_POST['collect_title'];
$collect_type = $_POST['collect_type'];
$collect_price = $_POST['collect_price'];
$btime = $_POST['btime'];
$sql = "UPDATE `collectibles` SET `collect_title`='$collect_title',
        `collect_type`='$collect_type',
        `collect_price`='$collect_price',`btime`='$btime' WHERE id='$id'";
mysqli_query($conn, $sql);
$file_name= $_FILES['collect_img']['tmp_name'];
move_uploaded_file($file_name, "../../images/collect_img/".$id.".jpg");
header("Location: http://localhost/OAS/admin/view_collectibles.php");
