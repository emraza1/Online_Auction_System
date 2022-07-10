<?php
include 'db.php';
$id = $_REQUEST['id'];
$name = $_POST['name'];
$position = $_POST['position'];

$sql = "UPDATE `team` SET `name`='$name' , `position`='$position' WHERE id='$id'";
mysqli_query($conn, $sql);
$file_name= $_FILES['team']['tmp_name'];


move_uploaded_file($file_name, "../../images/team/".$id.".jpg");


header("Location: http://localhost/OAS/admin/team.php");
