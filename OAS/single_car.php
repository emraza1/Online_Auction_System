<?php include('session.php');
      if(!isset($_SESSION['login_user'])){
                 echo "<script type='text/javascript'>alert('Please Login First!')</script>";                                            
                                                                 }
                                         else {
                                             ?>
                                           
<?php include  '_inc/head.php'; ?>

<!--nav start here-->
<?php include  '_inc/nav.php'; ?>
<!--nav end here-->

<!--LOGO SEARCH-->
<?php include  '_inc/logo-search.php'; ?>
<!--LOGO SEARCH END-->

<!-- SIGNIN REGISTER-->
<?php include  '_inc/top-info.php'; ?>
<!-- SIGNIN REGISTER END -->
<?php include  '_inc/EmailSender.php'; ?>

<div class="container">
	<br> 
<hr>

	
<div class="card">
    <?php
    include '_inc/db.php';
    $id= $_REQUEST['id'];
    
    $sql= "SELECT * FROM cars WHERE id=$id";
    $result = mysqli_fetch_assoc(mysqli_query($conn,$sql));
    ?>
	<div class="row">
		<aside class="col-sm-5 border-right">
<article class="gallery-wrap"> 
<div class="img-big-wrap">
    <div> <a href="#"><img  style="width:430px; height:480px;"src="images/car_img/<?=$result['id']?>.jpg"></a></div>
</div> <!-- slider-product.// -->

</article> <!-- gallery-wrap .end// -->
		</aside>
            
		<aside class="col-sm-7">
<article class="card-body p-5">
	<h3 class="title mb-3"><?= $result['car_title']; ?></h3>

<p class="price-detail-wrap"> 
	<span class="price h3 text-warning"> 
		<span class="currency">Starting Price US $</span><span class="num"><?= $result['car_price']; ?></span>
	</span> 
	<span></span> 
</p> <!-- price-detail-wrap .// -->


<?php    include '_inc/timer_js.php'; ?>



        <?php
         date_default_timezone_set('Asia/Karachi');  
        $cur_date = date('Y-m-d H:i:s', time());
        
        $btime=$result['btime'];
        $b_date = strtotime("$btime");
        $c_date = strtotime("$cur_date");
   
        $remaining = $b_date - $c_date;
        $days_remaining = floor($remaining / 86400);
        $hours_remaining = floor(($remaining % 86400) / 3600);
        
        $minutes_remaining = floor(($remaining % 3600) / 60);
        $seconds_remaining = floor($remaining % 60);
        
        if (($days_remaining <= 0) && ($hours_remaining <= 0) && ($minutes_remaining <= 0) && ($seconds_remaining <= 0)){
            
								$id = $_GET['id'];
								$sql = "SELECT username,price,u_id FROM bid_car WHERE id= $id ORDER BY Price DESC LIMIT 1";
								$rest = $conn -> query($sql);
								$count = 1;

								if ($rest -> num_rows > 0) {
									echo '
                                                                                <dt>
							<h4><b>Highest bid:</b></h4>
						</dt>
						<dd>
							<h4>
							<table class="table table-striped table-bordered table-hover table-condensed" style="width:100%">
								<tr class="info">
									<th>S.No.</th>
                                                                        <th>USER ID</th>
									<th>USER</th>
									<th>PRICE</th>
								</tr>';

									while ($row = $rest -> fetch_assoc()) {
                                                                             $user_id = $row["u_id"];
										echo "
											<tr>
                                                                                       
												<td>" . $count . "</td><td>" . $row["u_id"] . "</td><td>" . $row["username"] . "</td><td>" . $row["price"] . "</td>
											</tr>";
										$count++;
									}

									echo "
							</table>
							";
                                                                        
								} 
   $itm = $_GET['id']; 
     $sql2="SELECT * FROM users INNER JOIN cars ON users.u_id=cars.u_id WHERE id='$itm'";
$res1 = $conn -> query($sql2);
                if ($res1 -> num_rows > 0) {
                      while ($row = $res1 -> fetch_assoc()) {        
                       $user = $row["username"];
                       $e_mail = $row["email"];
                       $phone = $row["phone"];
                        $title = $row["car_title"];
                       $car_mod = $row["car_model"];
                       $year = $row["make_year"];
                       $cur = $row["cur_price"];
                       $car = $row["car_price"];
                       }
                    }
   if ($cur > $car){                 
   $sql1 = "SELECT username,email from users WHERE u_id=$user_id";
   $result1 = $conn -> query($sql1);
  
    if ($result1 -> num_rows > 0) {
    
       while ($row = $result1 -> fetch_assoc()) {
       sendEmail($row["username"],$row["email"],  $title . ' ' . $car_mod . ' ' .  $year . ' '. $user . ' ' . $phone . ' ' . $e_mail . ' ' . $cur . ' ');
                    }
                  }

        }  else{
            echo "<script type='text/javascript'>alert('no bidding done!')</script>";
        }
        }
      
        ?>



<dl class="item-property">
  <dt>state</dt>
  <dd><p><?= $result['state']; ?></p></dd>
</dl>
<dl class="param param-feature">
  <dt>Model</dt>
  <dd><?= $result['car_model']; ?></dd>
</dl>  <!-- item-property-hor .// -->

<dl class="param param-feature">
  <dt>fuel</dt>
  <dd><?= $result['fuel']; ?></dd>
</dl>  <!-- item-property-hor .// -->

<dl class="param param-feature">
  <dt>Mileage</dt>
  <dd><?= $result['mileage']; ?></dd>
</dl>  <!-- item-property-hor .// -->

<dl class="param param-feature">
  <dt>Year</dt>
  <dd><?= $result['make_year']; ?></dd>
</dl>  <!-- item-property-hor .// -->

<hr>

        <dt><form method="post" onsubmit="return fv()">
		<input name="bAmount" type="double" required class="form-control" id="bAmount"  placeholder="Bidding Amount"></dt> 
                <dd><input class="btn-bid" type="submit" name="submit"  value="Bid Now" />
	</dd></form><br>
                                        
   <?php 
 if (isset($_POST['submit']))
  {
    date_default_timezone_set('Asia/Karachi');  
        $cur_date = date('Y-m-d H:i:s', time());
        
        $btime=$result['btime'];
        $b_date = strtotime("$btime");
        $c_date = strtotime("$cur_date");
   
        $remaining = $b_date - $c_date;
        $days_remaining = floor($remaining / 86400);
        $hours_remaining = floor(($remaining % 86400) / 3600);
        
        $minutes_remaining = floor(($remaining % 3600) / 60);
        $seconds_remaining = floor($remaining % 60);
        
     if (($days_remaining <= 0) && ($hours_remaining <= 0) && ($minutes_remaining <= 0) && ($seconds_remaining <= 0)){
      include '_inc/db.php';
       echo "<script type='text/javascript'>alert('You cannot bid now! This auction is finished')</script>";
     }
     
         
        else {
                 include '_inc/db.php';
     $amount = $_REQUEST['bAmount'];
     $name = $_SESSION['login_user'];
     $id = $_GET['id'];
     $price = $result['cur_price'];
     $btime = $result['btime'];
  
  
     if ($amount == $price){
         echo "<script type='text/javascript'>alert('Bidding price should be greater than starting price!')</script>";
     }
     
     else if($amount < $price){
          echo "<script type='text/javascript'>alert('Bidding price is less than starting price!')</script>";
     }
     
     else if($amount > $price){
         include '_inc/db.php';
              $amount = $_REQUEST['bAmount'];
     $name = $_SESSION['login_user'];
     $id = $_GET['id'];
         $sql="INSERT INTO bid_car (username, u_id, price, id) VALUES ('$name', '$u_id', '$amount', '$id')";
         mysqli_query($conn,$sql);
          $amount = $_REQUEST['bAmount'];
         $query = "UPDATE `cars` SET `cur_price`='$amount'
         WHERE id='$id'";
         mysqli_query($conn, $query);
          echo "<script type='text/javascript'>alert('SUCCESSFUL!')</script>";
          
         }
     }

                
     
     
  }
?>

       <dt>
							<h4><b>Current Price:</b></h4>
						</dt>
						<dd>
							<h4>
							<?php
								$id = $_GET['id'];
								$sql = "SELECT username,price FROM bid_car WHERE id= $id ORDER BY Price DESC";
								$result = $conn -> query($sql);
								$count = 1;

								if ($result -> num_rows > 0) {
									echo '
							<table class="table table-striped table-bordered table-hover table-condensed" style="width:100%">
								<tr class="info">
									<th>S.No.</th>
									<th>USER</th>
									<th>PRICE</th>
								</tr>';

									while ($row = $result -> fetch_assoc()) {
										echo "
											<tr>
												<td>" . $count . "</td><td>" . $row["username"] . "</td><td>" . $row["price"] . "</td>
											</tr>";
										$count++;
									}

									echo "
							</table>
							";
								} else {
									echo "0 results";
								}
								$conn -> close();
							?>
							</h4>

						</dd>
        <br>
	</article> <!-- card-body.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
</div> <!-- card.// -->


</div>
<!--container.//-->


<script>
    function fv(){
        var bAmount = document.getElementById('bAmount').value;
        var bAmount_regex = /^[0-9.]{1,8}$/;
        if (bAmount_regex.test(bAmount) == false) {
            alert("Enter accurate Bid Amount");
            return false;
        
    }
    }
    </script>
<!-- footer -->
<?php include  '_inc/footer.php'; ?>
<!-- footer end -->


<!-- top-scroll -->
<?php include  '_inc/top-scroll.php'; ?>
<!-- top-scroll end -->

<?php } ?>