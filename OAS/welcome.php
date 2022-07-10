<?php
   include('session.php');
?>


<?php include  '_inc/head.php'; ?>


<!--nav start here-->
<?php include  '_inc/nav.php'; ?>
<!--nav end here-->

<!--LOGO SEARCH-->
<?php include  '_inc/logo-search.php'; ?>
<!--LOGO SEARCH END-->


<!--profile-nav start here-->
<?php include  '_inc/top-info.php'; ?>
<!--profile-nav end here-->

   
   <body>
  
            <br>
            <h1>Welcome <?php echo $login_session; ?></h1> 
            <br>
            <div class="container">
            <div class="row">
                
        <div class="col-md-3">
		<div class="wrap">
    <div class="menu">
        <div class="mini-menu">
            <ul>
        <li class="sub">
            <a href="add_jewellery.php">Add Jewelery</a>
        </li>
        <li class="sub">
            <a href="add_watch.php">Add Watch</a>
        </li>
        <li class="sub">
            <a href="add_furniture.php">Add Furniture</a>
            
        </li>
        <li class="sub">
            <a href="add_collectibles.php">Add Collectibles</a>
        </li>
        
        <li class="sub">
            <a href="add_property.php">Add Property</a>
        </li>
        
        <li class="sub">
            <a href="add_car.php">Add Cars</a>
        </li>
        
        <li class="sub">
            <a href="add_garments.php">Add Garments</a>
        </li>
        
        <li class="sub">
            <a href="add_electronics.php">Add Electronics</a>
        </li>
    </ul>
        </div>

	</div>
	</div>
	</div>
       
                <br> <br> <br> <br>
                <center><div class="col-md-9" style="border:4px solid #0ab2d2;"><br>
                <h3>Username: <?php echo $login_session ?></h3>
                <h3>Email: <?php echo $email ?></h3> 
                <h3>Contact: <?php echo $phone ?></h3>
                <h3>Gender: <?php echo $gender ?></h3>
                <h3>Country: <?php echo $country ?></h3>
                 <?php
                include '_inc/db.php';
                
                $sql="SELECT * FROM users where u_id='$u_id'";
                $result = mysqli_query($conn,$sql);
                foreach($result as $value){
                   echo"
                <a class='btn btn-info' href='update_users.php?u_id=".$value['u_id']."'>Update</a>  <br> <br>";} ?>  <br>
                    </div> </center>
                </div>
                            </div>

      <br>
   
	
<!-- footer -->
<?php include  '_inc/footer.php'; ?>
<!-- footer end -->


<!-- top-scroll -->
<?php include  '_inc/top-scroll.php'; ?>
<!-- top-scroll end -->
