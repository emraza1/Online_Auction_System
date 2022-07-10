<!-- team --><br>
<div class="container">
    <div id="team" class="team section">
        <div class="team-row">
		
           <center> <img src="img/pink-line.png" class="rib"/></center>
<center><h2>  OUR TEAM</h2> </center> <br><br>  
<?php 
                        
                           include '_inc/db.php';
                            $sql= "SELECT * FROM team";
                            $result = mysqli_query($conn, $sql);
                            foreach ($result as $data)
                        
                                {
                                echo
                                  "  <div class='col-md-3 col-sm-3 col-xs-6 team-grids'>
                                         <div class='team-effect'>
						<img src='./images/team/".$data['id'].".jpg' class='img-responsive' alt='' >
						<div class='team-text'>
							<h4>".$data['name']."</h4>
							<p>".$data['position']."</p>
						</div>
					</div>
				</div> ";
                                }
                                ?>
<br>
        </div>
    </div>
</div>
<br>    
    <!-- //team -->
