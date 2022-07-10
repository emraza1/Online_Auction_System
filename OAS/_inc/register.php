<?php
$username = "";
$email    = "";
$errors = array(); 

$host = "localhost";
$user = "root";
$password = "";
$dbname = "onlineauctionsystem";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

if (isset($_POST['submit'])) {
    

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$country = $_POST['country'];


if ($password != $confirm) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	// $password = md5($password_1);//encrypt the password before saving in the database


$sql = "INSERT INTO `users`(`username`, `email`, `password`, `gender`, `phone`, `country`) VALUES ('$username','$email','$password','$gender','$phone','$country')";

mysqli_query($conn,$sql);
header("Location: http://localhost/OAS/sign in.php ");
  }
}
?>  