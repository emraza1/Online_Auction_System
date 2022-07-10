<?php include  '_inc/head.php'; ?>


<!--nav start here-->

<?php include  '_inc/nav.php'; ?>
<!--nav end here-->


<div class="container-fluid">
<div class="row">
<div class="colourr">
    <form method="POST" action="_inc/add_collectibles.php" onsubmit="return fv()" enctype="multipart/form-data">
    <center><h2>Add Collectibles</h2></center>
    <br>
&nbsp 
<b>Title </b>
<input type="text" name="collect_title" id="collect_title" placeholder="Enter Title" required="required" class="user-input"/><br /><br />

&nbsp 
<b>Type </b>
<input type="text" name="collect_type" id="collect_type" placeholder="Enter Type" required="required" class="user-input"/><br/><br />

&nbsp 
<b>Starting Price </b>
<input type="double" name="collect_price" id="collect_price" placeholder="Enter Starting Price" required="required" class="user-input"/><br/><br />

&nbsp 
<b>Ending Time </b>
<input type="datetime-local" name="btime" placeholder="Enter Ending Time" required="required" class="user-input"/><br/><br />

&nbsp 
<b> Image </b>
<input type="file" name="collect_img" required="required" class="user-input"/><br/><br />

<input type="submit" value=" Submit " name="submit" class="signbtn"/><br />

</form>

</div>
</div>
</div>
                                 
<!--SIGN IN FORM END-->
 <script>
    function fv(){
        var collect_title = document.getElementById('collect_title').value;
        var collect_title_regex = /^[a-zA-Z0-9 ]{5,35}$/;
        if (collect_title_regex.test(collect_title) == false) {
            alert("Enter accurate title data");
            return false;
        
    }
     var collect_type = document.getElementById('collect_type').value;
        var collect_type_regex = /^[a-zA-Z0-9 ]{5,25}$/;
        if (collect_type_regex.test(collect_type) == false) {
            alert("Enter accurate type data");
            return false;
        
    }
    
      var collect_price = document.getElementById('collect_price').value;
        var collect_price_regex = /^[0-9]{1,9}$/;
        if (collect_price_regex.test(collect_price) == false) {
            alert("Enter accurate price data");
            return false;
        
    }
     
    }
    </script>

<!-- footer -->
<?php include  '_inc/footer.php'; ?>
<!-- footer end -->


