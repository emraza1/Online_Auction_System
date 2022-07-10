<?php
include 'db.php';
$id = $_REQUEST['id'];
$title = $_POST['title'];

$sql = "UPDATE `gallery` SET `title`='$title' WHERE id='$id'";
mysqli_query($conn, $sql);
$file_name= $_FILES['gallery']['tmp_name'];
move_uploaded_file($file_name, "../../images/gallery/".$id.".jpg");


header("Location: http://localhost/OAS/admin/gallery.php");
