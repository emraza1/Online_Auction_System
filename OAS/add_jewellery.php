<?php include  '_inc/head.php'; ?>


<!--nav start here-->

<?php include  '_inc/nav.php'; ?>
<!--nav end here-->


<div class="container-fluid">
<div class="row">
<div class="colourr">
    <form method="POST" action="_inc/add_jewellery.php" onsubmit="return fv()" enctype="multipart/form-data">
    <center><h2>Add Jewelery</h2></center>
    <br>
&nbsp 
<b>Type </b>
<input type="text" name="jew_type" id="jew_type" placeholder="Enter Type" required="required" class="user-input"/><br /><br />

&nbsp 
<b>Material </b>
<input type="text" name="jew_material" id="jew_material" placeholder="Enter Material" required="required" class="user-input"/><br/><br />

&nbsp 
<b>Brand </b>
<input type="text" name="jew_brand" id="jew_brand" placeholder="Enter Brand" required="required" class="user-input"/><br/><br />

&nbsp 
<b>Starting Price </b>
<input type="double" name="jew_price" id="jew_price" placeholder="Enter Starting Price" required="required" class="user-input"/><br/><br />


&nbsp 
<b>Ending Time </b>
<input type="datetime-local" name="btime" placeholder="Enter Ending Time" required="required" class="user-input"/><br/><br />
 
&nbsp
<b> Condition </b>
<select class="user-input" name="state" required="required">
                    <option>New</option>
                    <option>Old</option>
                  </select><br/><br/>

&nbsp 
<b>Image </b>
<input type="file" name="jew_img" required="required" class="user-input"/><br/><br />

<input type="submit" value=" Submit " name="submit" class="signbtn"/><br />

</form>

</div>
</div>
</div>
                                 
<!--SIGN IN FORM END-->
  <script>
    function fv(){
        var jew_type = document.getElementById('jew_type').value;
        var jew_type_regex = /^[a-zA-Z0-9 ]{3,35}$/;
        if (jew_type_regex.test(jew_type) == false) {
            alert("Enter accurate jewelery type data");
            return false;
        
    }
     var jew_material = document.getElementById('jew_material').value;
        var jew_material_regex = /^[a-zA-Z0-9 ]{4,25}$/;
        if (jew_material_regex.test(jew_material) == false) {
            alert("Enter accurate material data");
            return false;
        
    }
      var jew_brand = document.getElementById('jew_brand').value;
        var jew_brand_regex = /^[a-zA-Z0-9 ]{4,35}$/;
        if (jew_brand_regex.test(jew_brand) == false) {
            alert("Enter accurate brand data");
            return false;
        
    }

      var jew_price = document.getElementById('jew_price').value;
        var jew_price_regex = /^[0-9]{1,9}$/;
        if (jew_price_regex.test(jew_price) == false) {
            alert("Enter accurate price data");
            return false;
        
    }
     
    }
    </script>

<!-- footer -->
<?php include  '_inc/footer.php'; ?>
<!-- footer end -->


