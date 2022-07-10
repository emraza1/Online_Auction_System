<?php include '_inc/check.php';?>
<?php include '_inc/head.php'; ?>
<?php include '_inc/header.php'; ?>
<?php include '_inc/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      
    <!-- Main content -->
    <section class="content">
             <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Jewellery</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="_inc/add jewellery.php" onsubmit="return fv()" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Type</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="jew_type" id="jew_type" placeholder="Enter Jewellery type" required="required">
                  </div>
                </div>
                  
                <div class="form-group">
                  <label class="col-sm-2 control-label">Material</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control"name="jew_material" id="jew_material" placeholder="Enter Jewellery Material" required="required">
                  </div>
                </div>
                  
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Brand</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="jew_brand" id="jew_brand" placeholder="Enter Brand name" required="required">
                  </div>
                </div>
             
                  
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Starting Price</label>

                  <div class="col-sm-6">
                    <input type="double" class="form-control" name="jew_price" id="jew_price" placeholder="Enter Starting Price" required="required">
                  </div>
                </div>
                  
                   <div class="form-group">
                  <label class="col-sm-2 control-label">Ending Time</label>

                  <div class="col-sm-6">
                    <input type="datetime-local" class="form-control" name="btime" placeholder="Enter Ending Time" required="required">
                  </div>
                </div>
            
                   <div class="form-group">
                  <label class="col-sm-2 control-label">Condition</label>
                  
                  <div class="col-sm-6">
                  <select class="form-control" name="state" required="required">
                    <option>New</option>
                    <option>Old</option>
                  </select>
                </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Jewellery Image</label>
                  
                <div class="col-sm-6">
                    <input type="file" class="form-control" name="jew_img" required="required">
                  </div>
                </div>
                  
                  
                  
                  
                  
                  
              </div>
  
  
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
   
 

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
<?php include '_inc/footer.php'; ?>
