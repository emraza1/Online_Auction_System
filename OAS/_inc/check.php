<?php
session_start();
if(!isset($_SESSION['user']) && empty($_SESSION['user'])){
    include './404.php'; exit;
}
?>

