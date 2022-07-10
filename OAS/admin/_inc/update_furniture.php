<?php
include 'db.php';
$id = $_REQUEST['id'];
$fur_type = $_POST['fur_type'];
$fur_pieces = $_POST['fur_pieces'];
$fur_price = $_POST['fur_price'];
$btime = $_POST['btime'];
$state = $_POST['state'];
$sql = "UPDATE `furniture` SET `fur_type`='$fur_type',
        `fur_pieces`='$fur_pieces',
        `fur_price`='$fur_price',
        `btime`='$btime',
        `state`='$state' WHERE id='$id'";
mysqli_query($conn, $sql);
$file_name= $_FILES['fur_img']['tmp_name'];
move_uploaded_file($file_name, "../../images/fur_img/".$id.".jpg");
header("Location: http://localhost/OAS/admin/view_furniture.php");
