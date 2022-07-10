<?php include  '_inc/head.php'; ?>


<!--nav start here-->

<?php include  '_inc/nav.php'; ?>
<!--nav end here-->


<div class="container-fluid">
<div class="row">
<div class="colourr">
    <form method="POST" action="_inc/add_electronics.php" onsubmit="return fv()" enctype="multipart/form-data">
    <center><h2>Add Electronics</h2></center>
    <br>
&nbsp 
<b>Title </b>
<input type="text" name="elec_title" id="elec_title" placeholder="Enter Title" required="required" class="user-input"/><br /><br />

&nbsp 
<b>Type </b>
<input type="text" name="elec_type" id="elec_type" placeholder="Enter type" required="required" class="user-input"/><br/><br />

&nbsp 
<b>Company </b>
<input type="text" name="elec_company" id="elec_company" placeholder="Enter Company" required="required" class="user-input"/><br/><br />

&nbsp 
<b>Model </b>
<input type="text" name="elec_model" id="elec_model" placeholder="Enter Model" required="required" class="user-input"/><br/><br />

 
&nbsp 
<b>Starting price</b>
<input type="double" name="elec_price" id="elec_price" placeholder="Enter starting Price" required="required" class="user-input"/><br/><br />

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
<b> Image </b>
<input type="file" name="elec_img" required="required" class="user-input"/><br/><br />

<input type="submit" value=" Submit " name="submit" class="signbtn"/><br />

</form>

</div>
</div>
</div>
                                 
<!--SIGN IN FORM END-->
 <script>
    function fv(){
        var elec_title = document.getElementById('elec_title').value;
        var elec_title_regex = /^[a-zA-Z0-9 ]{3,25}$/;
        if (elec_title_regex.test(elec_title) == false) {
            alert("Enter accurate title data");
            return false;
        
    }
     var elec_type = document.getElementById('elec_type').value;
        var elec_type_regex = /^[a-zA-Z0-9 ]{3,25}$/;
        if (elec_type_regex.test(elec_type) == false) {
            alert("Enter accurate electronics type data");
            return false;
        
    }
      var elec_company = document.getElementById('elec_company').value;
        var elec_company_regex = /^[a-zA-Z0-9 ]{4,25}$/;
        if (elec_company_regex.test(elec_company) == false) {
            alert("Enter accurate company data");
            return false;
        
    }
      var elec_price = document.getElementById('elec_price').value;
        var elec_price_regex = /^[0-9]{1,9}$/;
        if (elec_price_regex.test(elec_price) == false) {
            alert("Enter accurate price data");
            return false;
        
    }
      var elec_model = document.getElementById('elec_model').value;
        var elec_model_regex = /^[a-zA-Z0-9 ]{2,25}$/;
        if (elec_model_regex.test(elec_model) == false) {
            alert("Enter accurate model data");
            return false;
        
    }
    }
    </script>

<!-- footer -->
<?php include  '_inc/footer.php'; ?>
<!-- footer end -->


