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
              <h3 class="box-title">Add Watch</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="_inc/add watch.php" onsubmit="return fv()" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Type</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="watch_type" id="watch_type" placeholder="Enter Watch type" required="required">
                  </div>
                </div>

                  
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Brand</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="watch_brand" id="watch_brand" placeholder="Enter Brand name" required="required">
                  </div>
                </div>
             
                  
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Starting Price</label>

                  <div class="col-sm-6">
                    <input type="double" class="form-control" name="watch_price" id="watch_price" placeholder="Enter Starting Price" required="required">
                  </div>
                </div>
                  
                   <div class="form-group">
                  <label class="col-sm-2 control-label">Ending Time</label>

                  <div class="col-sm-6">
                    <input type="datetime-local" class="form-control" name="btime" placeholder="Enter Ending Time" required="required">
                  </div>
                </div>
            
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Select</label>
                  
                  <div class="col-sm-6">
                  <select class="form-control" name="gender" required="required">
                    <option>Men</option>
                    <option>Women</option>
                  </select>
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
                  <label class="col-sm-2 control-label">Watch Image</label>
                  
                <div class="col-sm-6">
                    <input type="file" class="form-control" name="watch_img" required="required">
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
<?php include '_inc/footer.php'; ?>
