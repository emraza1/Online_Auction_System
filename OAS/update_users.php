<?php include('_inc/register.php') ?>
<?php include  '_inc/head.php'; ?>



<!--nav start here-->
<?php include  '_inc/nav.php'; ?>
<!--nav end here-->

<!--SIGN IN FORM-->
 <?php
              include '_inc/db.php';
              $u_id = $_REQUEST['u_id'];
              $sql = "SELECT * FROM users WHERE u_id='$u_id'";
              $result = mysqli_query($conn, $sql);
              $result = mysqli_fetch_assoc($result);
              ?>						
<div class="container-fluid">
<div class="row sign-img">
<div class="colourr">
    <form method="post" action="_inc/update_users.php?u_id=<?php echo $result['u_id']; ?>" onsubmit="return fv()" enctype="multipart/form-data">
    <center><h2>Register</h2></center>
    <?php include('errors.php'); ?>
    <br>


&nbsp <span><i class="fa fa-address-card fa-lg"></i></span>
E-mail
<input type="email" name="email" id="email" required="required" value="<?= $result['email']; ?>" id="email" placeholder="example@domain.com" class="user-input"/><br/><br />

&nbsp <span><i class="fa fa-key fa-lg"></i></span>
Password
<input type="password" name="password"  required="required" value="<?= $result['password']; ?>" id="password" placeholder="Enter Password" class="user-input"/><br/><br />


&nbsp <span><i class="fa fa-user fa-lg"></i></span>
Gender
 <select class="user-input" name="gender" required="required" value="<?= $result['gender']; ?>" id="gender">
                    <option>male</option>
                    <option>female</option>
                  </select><br/><br/> 
                  

&nbsp <span><i class="fa fa-mobile-phone fa-lg"></i></span>
Phone
<input type="text" name="phone"  required="required" value="<?= $result['phone']; ?>" id="phone" placeholder="Enter Contact no." class="user-input"/><br/><br />



&nbsp <span><i class="fa fa-globe fa-lg"></i></span>
Country
<input type="text" name="country"  required="required" value="<?= $result['country']; ?>" id="country" placeholder="Enter Country" class="user-input"/><br/><br />



<input type="submit" value=" Submit " name="submit" class="signbtn"/><br />

</form>

</div>
</div>
</div>
                                 
<!--SIGN IN FORM END-->


<!-- footer -->
<?php include  '_inc/footer.php'; ?>
<!-- footer end -->
