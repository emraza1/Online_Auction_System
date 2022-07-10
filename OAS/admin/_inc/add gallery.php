<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "onlineauctionsystem";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

$title = $_POST['title'];


$sql = "INSERT INTO `gallery`(`title`)  VALUES ('$title')";

mysqli_query($conn,$sql);
$sql="SELECT MAX(id) as ID from gallery";
$ID= mysqli_query($conn,$sql);
$ID= mysqli_fetch_assoc($ID);
$ID= $ID['ID'];
$file_name= $_FILES['gallery']['tmp_name'];
move_uploaded_file($file_name, "../../images/gallery/".$ID.".jpg");
header("Location: http://localhost/OAS/admin/gallery.php");