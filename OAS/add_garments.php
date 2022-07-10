<?php include  '_inc/head.php'; ?>


<!--nav start here-->

<?php include  '_inc/nav.php'; ?>
<!--nav end here-->


<div class="container-fluid">
<div class="row">
<div class="colourr">
    <form method="POST" action="_inc/add_garments.php" onsubmit="return fv()" enctype="multipart/form-data">
    <center><h2>Add Garments</h2></center>
    <br>
&nbsp 
<b>Type </b>
<input type="text" name="gar_type" id="gar_type" placeholder="Enter Type" required="required" class="user-input"/><br /><br />

&nbsp 
<b>Material </b>
<input type="text" name="gar_material" id="gar_material" placeholder="Enter Material" required="required" class="user-input"/><br/><br />

&nbsp 
<b>Brand </b>
<input type="text" name="gar_brand" id="gar_brand" placeholder="Enter Brand" required="required" class="user-input"/><br/><br />

&nbsp 
<b>Starting Price </b>
<input type="double" name="gar_price" id="gar_price" placeholder="Enter Starting Price" required="required" class="user-input"/><br/><br />

 &nbsp 
<b>Ending Time </b>
<input type="datetime-local" name="btime" placeholder="Enter Ending Time" required="required" class="user-input"/><br/><br />

&nbsp
<b> Select </b>
<select class="user-input" name="gender" required="required">
                    <option>Men</option>
                    <option>Women</option>
                  </select><br/><br/>

 
&nbsp
<b> Condition </b>
<select class="user-input" name="state" required="required">
                    <option>New</option>
                    <option>Old</option>
                  </select><br/><br/>

&nbsp 
<b> Image </b>
<input type="file" name="gar_img" required="required" class="user-input"/><br/><br />

<input type="submit" value=" Submit " name="submit" class="signbtn"/><br />

</form>

</div>
</div>
</div>
                                 
<!--SIGN IN FORM END-->
<script>
    function fv(){
        var gar_type = document.getElementById('gar_type').value;
        var gar_type_regex = /^[a-zA-Z0-9 ]{3,35}$/;
        if (gar_type_regex.test(gar_type) == false) {
            alert("Enter accurate garment type data");
            return false;
        
    }
     var gar_material = document.getElementById('gar_material').value;
        var gar_material_regex = /^[a-zA-Z0-9 ]{4,25}$/;
        if (gar_material_regex.test(gar_material) == false) {
            alert("Enter accurate material data");
            return false;
        
    }
      var gar_brand = document.getElementById('gar_brand').value;
        var gar_brand_regex = /^[a-zA-Z0-9 ]{4,35}$/;
        if (gar_brand_regex.test(gar_brand) == false) {
            alert("Enter accurate brand data");
            return false;
        
    }

      var gar_price = document.getElementById('gar_price').value;
        var gar_price_regex = /^[0-9]{1,9}$/;
        if (gar_price_regex.test(gar_price) == false) {
            alert("Enter accurate price data");
            return false;
        
    }
     
    }
    </script>

<!-- footer -->
<?php include  '_inc/footer.php'; ?>
<!-- footer end -->


