<!--CURRENT AUCTIONS-->

<!--FIRST ROW START-->
<div class="container-fluid wid">
<div class="row">
    
<div class="col-md-12">
	
<!--CURRENT AUCTIONS-->


	
    <br>
	
	 <?php 
           include '_inc/db.php';
                            $sql= "SELECT * FROM electronics";
                            $result = mysqli_query($conn, $sql);
                            foreach ($result as $data)
                        
                                {
                                echo
                                  "  <div class='col-md-3 col-sm-3 col-xs-6 team-grids'>
		                       <div class='panel panel-default' style='border:2px solid #0ab2d2;'>
    
			         <div class='panel-heading' style='border-bottom:2px solid #0ab2d2;'>
				<center><h4>".$data['elec_title']."</h4></center>
	                             </div>
                                               
                                      <div class='panel-body'>
                                     <a href='#'>
                                      <img class='imgg' src='./images/elec_img/".$data['id'].".jpg' alt='' />
                                      </a>
                                     <a href='single_electronics.php?id=".$data['id']."'><button class='btn-bid'><b> View </b></button> </a>
				      </div>
                                <div class='panel-heading curr' style='border-top:2px solid #0ab2d2;'>
							<div class='col-md-6 left'>
								<b> Start Price: </b><br>
								".$data['elec_price']."
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
</div>
<!--SECOND ROW END-->
<!--CURRENT AUCTIONS END-->
