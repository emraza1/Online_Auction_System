<?php
include 'db.php';
$u_id = $_REQUEST['u_id'];
$from = $_REQUEST['from'];

$sql = "DELETE FROM $from WHERE u_id='$u_id'";
mysqli_query($conn, $sql);
header("Location:".$_SERVER['HTTP_REFERER']);