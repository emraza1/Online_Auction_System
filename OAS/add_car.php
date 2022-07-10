<?php include  '_inc/head.php'; ?>


<!--nav start here-->

<?php include  '_inc/nav.php'; ?>
<!--nav end here-->


<div class="container-fluid">
<div class="row">
<div class="colourr">
    <form method="POST" action="_inc/add_car.php" onsubmit="return fv()" enctype="multipart/form-data">
    <center><h2>Add Car</h2></center>
    <br>
&nbsp 
<b>Car title </b>
<input type="text" name="car_title" id="car_title" placeholder="Enter Car Title" required="required" class="user-input"/><br /><br />

&nbsp 
<b>Model </b>
<input type="text" name="car_model" id="car_model" placeholder="Enter Model" required="required" class="user-input"/><br/><br />

&nbsp 
<b>Year </b>
<input type="text" name="make_year" id="make_year" placeholder="Enter Make Year" required="required" class="user-input"/><br/><br />

&nbsp 
<b>Starting Price </b>
<input type="double" name="car_price" id="car_price" placeholder="Enter Starting Price" required="required" class="user-input"/><br/><br />

&nbsp 
<b>Ending Time </b>
<input type="datetime-local" name="btime" placeholder="Enter Ending Time" required="required" class="user-input"/><br/><br />
 

&nbsp 
<b>Mileage</b>
<input type="text" name="mileage" id="mileage" placeholder="Enter Mileage" required="required" class="user-input"/><br/><br />

&nbsp 
<b>Fuel type </b>
<input type="text" name="fuel" id="fuel" placeholder="Enter Fuel Type" required="required" class="user-input"/><br/><br />

&nbsp
<b> Condition </b>
 <select class="user-input" name="state" required="required">
                    <option>New</option>
                    <option>Old</option>
                  </select><br/><br/>

&nbsp 
<b> Car image </b>
<input type="file" name="car_img" required="required" class="user-input"/><br/><br />

<input type="submit" value=" Submit " name="submit" class="signbtn"/><br />

</form>

</div>
</div>
</div>
                                 
<!--SIGN IN FORM END-->

 <script>
    function fv(){
        var car_title = document.getElementById('car_title').value;
        var car_title_regex = /^[a-zA-Z0-9 ]{3,25}$/;
        if (car_title_regex.test(car_title) == false) {
            alert("Enter accurate car title data");
            return false;
        
    }
     var car_model = document.getElementById('car_model').value;
        var car_model_regex = /^[a-zA-Z0-9 ]{3,25}$/;
        if (car_model_regex.test(car_model) == false) {
            alert("Enter accurate car model data");
            return false;
        
    }
      var make_year = document.getElementById('make_year').value;
        var make_year_regex = /^[a-zA-Z0-9 ]{4,10}$/;
        if (make_year_regex.test(make_year) == false) {
            alert("Enter accurate car make year data");
            return false;
        
    }
      var car_price = document.getElementById('car_price').value;
        var car_price_regex = /^[0-9]{1,9}$/;
        if (car_price_regex.test(car_price) == false) {
            alert("Enter accurate car price data");
            return false;
        
    }
      var mileage = document.getElementById('mileage').value;
        var mileage_regex = /^[a-zA-Z0-9 ]{2,25}$/;
        if (mileage_regex.test(mileage) == false) {
            alert("Enter accurate car mileage data");
            return false;
        
    }
     var fuel = document.getElementById('fuel').value;
        var fuel_regex = /^[a-zA-Z ]{3,20}$/;
        if (fuel_regex.test(fuel) == false) {
            alert("Enter accurate car fuel data");
            return false;
        
    }
    }
    </script>
 
<!-- footer -->
<?php include  '_inc/footer.php'; ?>
<!-- footer end -->


