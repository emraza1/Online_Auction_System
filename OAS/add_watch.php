<?php include  '_inc/head.php'; ?>


<!--nav start here-->

<?php include  '_inc/nav.php'; ?>
<!--nav end here-->


<div class="container-fluid">
<div class="row">
<div class="colourr">
    <form method="POST" action="_inc/add_watch.php" onsubmit="return fv()" enctype="multipart/form-data">
    <center><h2>Add Watch</h2></center>
    <br>
&nbsp 
<b>Type </b>
<input type="text" name="watch_type" id="watch_type" placeholder="Enter Type" required="required" class="user-input"/><br /><br />

&nbsp 
<b>Brand </b>
<input type="text" name="watch_brand" id="watch_brand" placeholder="Enter Brand" required="required" class="user-input"/><br/><br />

&nbsp 
<b>Starting Price </b>
<input type="double" name="watch_price" id="watch_price" placeholder="Enter Starting Price" required="required" class="user-input"/><br/><br />

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
<input type="file" name="watch_img" required="required" class="user-input"/><br/><br />

<input type="submit" value=" Submit " name="submit" class="signbtn"/><br />

</form>

</div>
</div>
</div>
                                 
<!--SIGN IN FORM END-->
 <script>
    function fv(){
        var watch_type = document.getElementById('watch_type').value;
        var watch_type_regex = /^[a-zA-Z0-9 ]{3,35}$/;
        if (watch_type_regex.test(watch_type) == false) {
            alert("Enter accurate watch type data");
            return false;
        
    }
     var watch_brand = document.getElementById('watch_brand').value;
        var watch_brand_regex = /^[a-zA-Z0-9 ]{4,35}$/;
        if (watch_brand_regex.test(watch_brand) == false) {
            alert("Enter accurate watch brand data");
            return false;
        
    }
    
      var watch_price = document.getElementById('watch_price').value;
        var watch_price_regex = /^[0-9]{1,9}$/;
        if (watch_price_regex.test(watch_price) == false) {
            alert("Enter accurate price data");
            return false;
        
    }
     
    }
    </script>

<!-- footer -->
<?php include  '_inc/footer.php'; ?>
<!-- footer end -->


