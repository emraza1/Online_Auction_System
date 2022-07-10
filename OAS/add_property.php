<?php include  '_inc/head.php'; ?>


<!--nav start here-->

<?php include  '_inc/nav.php'; ?>
<!--nav end here-->


<div class="container-fluid">
<div class="row">
<div class="colourr">
    <form method="POST" action="_inc/add_property.php" onsubmit="return fv()" enctype="multipart/form-data">
    <center><h2>Add Property</h2></center>
    <br>
&nbsp 
<b>Property Type </b>
<input type="text" name="property_type" id="property_type" placeholder="Enter Type" required="required" class="user-input"/><br /><br />

&nbsp 
<b>Location</b>
<input type="text" name="property_loc" id="property_loc" placeholder="Enter Location" required="required" class="user-input"/><br/><br />

&nbsp 
<b>No. of rooms</b>
<input type="text" name="rooms" id="rooms" placeholder="Enter No. of rooms" required="required" class="user-input"/><br/><br />

&nbsp 
<b>Starting Price </b>
<input type="double" name="property_price" id="property_price" placeholder="Enter Starting Price" required="required" class="user-input"/><br/><br />

 &nbsp 
<b>Ending Time </b>
<input type="datetime-local" name="btime" placeholder="Enter Ending Time" required="required" class="user-input"/><br/><br />

&nbsp 
<b>Image </b>
<input type="file" name="property_img" required="required" class="user-input"/><br/><br />

<input type="submit" value=" Submit " name="submit" class="signbtn"/><br />

</form>

</div>
</div>
</div>
                                 
<!--SIGN IN FORM END-->
 <script>
    function fv(){
        var property_type = document.getElementById('property_type').value;
        var property_type_regex = /^[a-zA-Z0-9 ]{3,35}$/;
        if (property_type_regex.test(property_type) == false) {
            alert("Enter accurate property type data");
            return false;
        
    }
     var property_loc = document.getElementById('property_loc').value;
        var property_loc_regex = /^[a-zA-Z0-9 ]{4,35}$/;
        if (property_loc_regex.test(property_loc) == false) {
            alert("Enter accurate location data");
            return false;
        
    }
      var rooms = document.getElementById('rooms').value;
        var rooms_regex = /^[a-zA-Z0-9 ]{1,35}$/;
        if (rooms_regex.test(rooms) == false) {
            alert("Enter accurate no. of rooms data");
            return false;
        
    }

      var property_price = document.getElementById('property_price').value;
        var property_price_regex = /^[0-9]{1,9}$/;
        if (property_price_regex.test(property_price) == false) {
            alert("Enter accurate price data");
            return false;
        
    }
     
    }
    </script>

<!-- footer -->
<?php include  '_inc/footer.php'; ?>
<!-- footer end -->


