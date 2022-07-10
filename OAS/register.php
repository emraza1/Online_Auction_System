<?php include('_inc/register.php') ?>
<?php include  '_inc/head.php'; ?>



<!--nav start here-->
<?php include  '_inc/nav.php'; ?>
<!--nav end here-->

<!--SIGN IN FORM-->
						
<div class="container-fluid">
<div class="row sign-img">
<div class="colourr">
    <form method="post" action="register.php" onsubmit="return fv()">
    <center><h2>Register</h2></center>
    <?php include('errors.php'); ?>
    <br>
&nbsp <span><i class="fa fa-user fa-lg"></i></span>
Username
<input type="text" name="username" id="username" required="required" placeholder="Enter Name" class="user-input"/><br /><br />

&nbsp <span><i class="fa fa-address-card fa-lg"></i></span>
E-mail
<input type="email" name="email" id="email" required="required" placeholder="example@domain.com" class="user-input"/><br/><br />

&nbsp <span><i class="fa fa-key fa-lg"></i></span>
Password
<input type="password" name="password"  required="required" placeholder="Enter Password" class="user-input"/><br/><br />

&nbsp <span><i class="fa fa-key fa-lg"></i></span>
 Confirm Password
<input type="password" name="confirm"  required="required" placeholder="Re-Enter Password" class="user-input"/><br/><br />

&nbsp <span><i class="fa fa-user fa-lg"></i></span>
Gender
 <select class="user-input" name="gender" required="required" id="gender">
                    <option>male</option>
                    <option>female</option>
                  </select><br/><br/> 
 
&nbsp <span><i class="fa fa-mobile-phone fa-lg"></i></span>
Phone
<input type="text" name="phone"  required="required" placeholder="Enter Contact no." class="user-input"/><br/><br />



&nbsp <span><i class="fa fa-globe fa-lg"></i></span>
Country
<input type="text" name="country"  required="required" placeholder="Enter Country" class="user-input"/><br/><br />

<input type="submit" value=" Submit " name="submit" class="signbtn"/><br />
<center><h4>Already a member? <a href="sign in.php"><b>Sign in!</b></a></h4></center>
</form>

</div>
</div>
</div>
                                 
<!--SIGN IN FORM END-->


<!-- footer -->
<?php include  '_inc/footer.php'; ?>
<!-- footer end -->
