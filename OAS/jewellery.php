<?php include  '_inc/head.php'; ?>


<?php include  '_inc/nav.php'; ?>
<!--nav end here-->

<!--LOGO SEARCH-->
<?php include  '_inc/logo-search.php'; ?>
<!--LOGO SEARCH END-->

<!-- SIGNIN REGISTER-->
<?php include  '_inc/top-info.php'; ?>
<!-- SIGNIN REGISTER END -->



<?php include  '_inc/sidebar.php'; ?>

	<div class="col-md-10">
	
<!--CURRENT AUCTIONS-->


	
    <br>
	
	 <?php 
           include '_inc/db.php';
                            $sql= "SELECT * FROM jewellery";
                            $result = mysqli_query($conn, $sql);
                            foreach ($result as $data)
                        
                                {
                                echo
                                  "  <div class='col-md-3 col-sm-3 col-xs-6 team-grids'>
		                       <div class='panel panel-default' style='border:2px solid #0ab2d2;'>
    
			         <div class='panel-heading' style='border-bottom:2px solid #0ab2d2;'>
				<center><h4>".$data['jew_type']."</h4></center>
	                             </div>
                                               
                                      <div class='panel-body'>
                                     <a href='#'>
                                      <img class='imgg' src='./images/jew_img/".$data['id'].".jpg' alt='' />
                                      </a>
                                      <a href='single_jewellery.php?id=".$data['id']."'><button class='btn-bid'><b> View </b></button> </a>
				      </div>
                                <div class='panel-heading curr' style='border-top:2px solid #0ab2d2;'>
						<div class='col-md-6 left'>
								<b> Start Price: </b><br>
								".$data['jew_price']."
							</div>
	
							<div class='col-md-6 right'>
								<b>Cur Price: </b><br>
								".$data['cur_price']."
							</div>

					</div>

                                        </div>
                                        </div>";
                                }
                                ?>

        </div>
   
</div>
<center><form action="jewellery.php" method="post">
			<input class="bar_search" type="text" name="search" placeholder="Search here..." required="">
			<button class="btn" id="findbtn"> <span class="fa fa-search fa-2x"></span> </button>
    </form></center>
  <?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "onlineauctionsystem";
$output='';
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

if(isset($_POST['search'])){
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
    $query = mysqli_query($conn,"SELECT * FROM jewellery WHERE jew_type LIKE '%$searchq%' OR jew_price LIKE '%$searchq%' OR jew_brand LIKE '%$searchq%' OR jew_material LIKE '%$searchq%'") or die("could not search!");
    $count = mysqli_num_rows($query);
    if($count == 0)
    {
        $output='NO RESULT FOUND!';
    }
    else{
        while($row= mysqli_fetch_array($query)){
            $jew_type = $row['jew_type'];
            $jew_price = $row['jew_price'];
             $cur_price = $row['cur_price'];
              $id = $row['id'];
            $output .="   <div class='col-md-3 col-sm-3 col-xs-6 team-grids'>
		                       <div class='panel panel-default' style='border:2px solid #0ab2d2;'>
    
			         <div class='panel-heading' style='border-bottom:2px solid #0ab2d2;'>
				<center><h4>$jew_type</h4></center>
	                             </div>
                                     
                                               
                                      <div class='panel-body'>
                                     <a href='#'>
                                      <img class='imgg' src='./images/jew_img/$id.jpg' alt='' />
                                      </a>
                                      <a href='single_jewellery.php?id=$id'><button class='btn-bid'><b> View </b></button> </a>
				      </div>
                                     
                                     
                                <div class='panel-heading curr' style='border-top:2px solid #0ab2d2;'>
						<div class='col-md-6 left'>
								<b> Start Price:</b><br>
								 $ $jew_price
							</div>
	
							<div class='col-md-6 right'>
								<b>Cur Price:</b><br>
								$ $cur_price
							</div>

					</div>

                                        </div>
                                        </div>";
            
            
        }
    }
}
print("$output");
?>

</div>

</div>
	  <!--Menu-->


<!-- footer -->
<?php include  '_inc/footer.php'; ?>
<!-- footer end -->


<!-- top-scroll -->
<?php include  '_inc/top-scroll.php'; ?>
<!-- top-scroll end -->
