<?php
session_start();
unset($_SESSION['admin_data']);
header("Location: http://localhost/OAS/admin/index.php");

