<?php
include 'db.php';
$u_id = $_REQUEST['u_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];

$country = $_POST['country'];

$sql = "UPDATE `users` SET `username`='$username',
        `email`='$email',
        `password`='$password',
        `gender`='$gender',
        `phone`='$phone',
        
        `country`='$country' WHERE u_id='$u_id'";
mysqli_query($conn, $sql);
header("Location: http://localhost/OAS/admin/view_users.php ");
