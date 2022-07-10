<?php
include 'db.php';
$id = $_REQUEST['id'];
$from = $_REQUEST['from'];
$sql = "DELETE FROM $from WHERE id='$id'";
mysqli_query($conn, $sql);
header("Location:".$_SERVER['HTTP_REFERER']);