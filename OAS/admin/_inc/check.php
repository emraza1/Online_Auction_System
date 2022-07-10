<?php
session_start();
if(!isset($_SESSION['admin_data']) && empty($_SESSION['admin_data'])){
    include './404.php'; exit;
}
?>

