<?php
include 'db.php';
$id = $_REQUEST['id'];
$watch_type = $_POST['watch_type'];
$watch_brand = $_POST['watch_brand'];
$watch_price = $_POST['watch_price'];
$btime = $_POST['btime'];
$gender = $_POST['gender'];
$state = $_POST['state'];
$sql = "UPDATE `watch` SET `watch_type`='$watch_type',
        `watch_brand`='$watch_brand',
        `watch_price`='$watch_price',
            `btime`='$btime',
        `gender`='$gender',
        `state`='$state' WHERE id='$id'";
mysqli_query($conn, $sql);
$file_name= $_FILES['watch_img']['tmp_name'];
move_uploaded_file($file_name, "../../images/watch_img/".$id.".jpg");
header("Location: http://localhost/OAS/admin/view_watch.php");
