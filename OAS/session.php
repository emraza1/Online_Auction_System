<?php
   include('_inc/db.php');
   session_start();
   
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select * from users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $u_id = $row['u_id'];
   $login_session = $row['username'];
   $gender = $row['gender'];
   $country = $row['country'];
   $email = $row['email'];
   $phone = $row['phone'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: sign in.php");
   }
?>
