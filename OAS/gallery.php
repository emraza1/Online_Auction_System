<?php include  '_inc/head.php'; ?>

<!--nav start here-->
<?php include  '_inc/nav.php'; ?>
<!--nav end here-->

    <!-- gallery -->
 <!-- Page Content -->
    <div class="container">
        <div class="height-top">
</div>

      <h1 class="my-4 text-center text-lg-left">  </h1>

      <div class="row text-center text-lg-left">
          <?php 
           include '_inc/db.php';
                            $sql= "SELECT * FROM gallery";
                            $result = mysqli_query($conn, $sql);
                            foreach ($result as $data)
                        
                                {
                                echo
                                  "  <div class='col-lg-3 col-md-4 col-xs-6'>
                                     <a href='#'>
                                      <img class='img-fluid img-thumbnail' src='./images/gallery/".$data['id'].".jpg' class='img-responsive' alt='' >
                                      </a>
				      </div>";
                                }
                                ?>

       
    </div>
      </div>
     <!-- //gallery-js  -->
	
	
	
     <br>
	<!--Subscribe-->
           <!-- <php include '_inc/subscribe.php'; ?> -->
<!--Subscribe END-->


<!-- footer -->
<?php include  '_inc/footer.php'; ?>
<!-- footer end -->


<!-- top-scroll -->
<?php include  '_inc/top-scroll.php'; ?>
<!-- top-scroll end -->
