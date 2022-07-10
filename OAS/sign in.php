<?php
   include("_inc/db.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT u_id FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>


<?php include '_inc/head.php'; ?>

<!--nav start here-->
<?php include  '_inc/nav.php'; ?>
<!--nav end here-->

<!--SIGN IN FORM-->
<div class="container-fluid">
<div class="row sign-img">

<div class="colourr">
				<form method="POST">
                                    
                        
                                    
				<center><h2>Sign In</h2></center>
						<div>
						&nbsp <span><i class="fa fa-user fa-lg"></i></span>
							Username
							<input type="text" name="username" placeholder="Username" class="user-input" required="">
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

</div>
</div>


<!--SIGN IN FORM END-->


<!-- footer -->
<?php include  '_inc/footer.php'; ?>
<!-- footer end -->
