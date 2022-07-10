<?php

if(isset($_SESSION['admin_data']) && !empty($_SESSION['admin_data'])){
    header("Location: http://localhost/OAS/welcome.php");
    
}
if(isset($_GET['email']) && isset($_GET['password'])){
    include '_inc/db.php';
    $email = $_GET['email'];
    $password = $_GET['password'];
    //$password = md5($password);
    //echo $password;exit;
    $login_query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $login_query);
 $num_rows = mysqli_num_rows($result);
    if ($num_rows == 1)
    {
         $_SESSION['admin_data'] = mysqli_fetch_assoc($result);
        header("Location: http://localhost/OAS/welcome.php");
       
    }
   else
    {
        echo "Error";
        exit;
    }  
}
?>

<?php include  '_inc/pink-line.php'; ?>
<div class="container-fluid">
<div class="row">    
    
<div class="col-md-4 trans">

				<form method="GET">
                                    
                        
                                    
				<center><h2>Sign In</h2></center>
						<div>
						&nbsp <span><i class="fa fa-user fa-lg"></i></span>
							Email
							<input type="text" name="email" placeholder="Email" class="user-input" required="">
						</div>
						<br>
						<div>
						&nbsp <span><i class="fa fa-key fa-lg"></i></span>
							Password
							<input type="password" name="password" placeholder="password" class="password" required="">
						</div>
							
						<br>
                                                <input type="submit" value="sign in" name="submit" class="signbtn"><br> </form>
                                
						<h4>Not a member?<br>Create an account! <a href="register.php"><b>Register now!</b></a></h4>
</div>

<div class="col-md-8 bgsign">

</div>


</div>
</div>
<br>