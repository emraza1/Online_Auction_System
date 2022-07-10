<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "onlineauctionsystem";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

$name = $_POST['name'];
$position = $_POST['position'];


$sql = "INSERT INTO `team`(`name` , `position`)  VALUES ('$name' , '$position')";

mysqli_query($conn,$sql);
$sql="SELECT MAX(id) as ID from team";
$ID= mysqli_query($conn,$sql);
$ID= mysqli_fetch_assoc($ID);
$ID= $ID['ID'];
$file_name= $_FILES['team']['tmp_name'];
move_uploaded_file($file_name, "../../images/team/".$ID.".jpg");
header("Location: http://localhost/OAS/admin/team.php");