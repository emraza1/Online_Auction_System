<?php include  '_inc/head.php'; ?>


<!--nav start here-->

<?php include  '_inc/nav.php'; ?>
<!--nav end here-->


<div class="container-fluid">
<div class="row">
<div class="colourr">
    <form method="POST" action="_inc/add_furniture.php" onsubmit="return fv()" enctype="multipart/form-data">
    <center><h2>Add Furniture</h2></center>
    <br>
&nbsp 
<b>Type </b>
<input type="text" name="fur_type" id="fur_type" placeholder="Enter Type" required="required" class="user-input"/><br /><br />

&nbsp 
<b>No. of pieces </b>
<input type="text" name="fur_pieces" id="fur_pieces" placeholder="Enter No. of pieces" required="required" class="user-input"/><br/><br />

&nbsp 
<b>Starting Price</b>
<input type="double" name="fur_price" id="fur_price" placeholder="Enter Starting Price" required="required" class="user-input"/><br/><br />

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
<input type="file" name="fur_img" required="required" class="user-input"/><br/><br />

<input type="submit" value=" Submit " name="submit" class="signbtn"/><br />

</form>

</div>
</div>
</div>
                                 
<!--SIGN IN FORM END-->
 <script>
    function fv(){
        var fur_type = document.getElementById('fur_type').value;
        var fur_type_regex = /^[a-zA-Z0-9 ]{3,35}$/;
        if (fur_type_regex.test(fur_type) == false) {
            alert("Enter accurate Furniture type data");
            return false;
        
    }
     var fur_pieces = document.getElementById('fur_pieces').value;
        var fur_pieces_regex = /^[a-zA-Z0-9 ]{1,25}$/;
        if (fur_pieces_regex.test(fur_pieces) == false) {
            alert("Enter accurate no. of pieces data");
            return false;
        
    }

      var fur_price = document.getElementById('fur_price').value;
        var fur_price_regex = /^[0-9]{1,9}$/;
        if (fur_price_regex.test(fur_price) == false) {
            alert("Enter accurate price data");
            return false;
        
    }
     
    }
    </script>

<!-- footer -->
<?php include  '_inc/footer.php'; ?>
<!-- footer end -->


