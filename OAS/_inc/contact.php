<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "onlineauctionsystem";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO `contact`(`name`, `email`, `subject`, `phone`, `message`) VALUES ('$name','$email','$subject','$phone','$message')";

mysqli_query($conn,$sql);
header("Location: http://localhost/OAS/contact.php ");
?>  