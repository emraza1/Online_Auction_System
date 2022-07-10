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
              <h3 class="box-title">Add Property</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="_inc/add property.php" onsubmit="return fv()" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Type</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="property_type" id="property_type" placeholder="Enter Property Type" required="required">
                  </div>
                </div>
                  
                <div class="form-group">
                  <label class="col-sm-2 control-label">Location</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control"name="property_loc" id="property_loc" placeholder="Enter Location" required="required">
                  </div>
                </div>
                  
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Rooms</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="rooms" id="rooms" placeholder="Enter number of Rooms" required="required">
                  </div>
                </div>
             
                  
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Starting Price</label>

                  <div class="col-sm-6">
                    <input type="double" class="form-control" name="property_price" id="property_price" placeholder="Enter Starting Price" required="required">
                  </div>
                </div>
                  
                   <div class="form-group">
                  <label class="col-sm-2 control-label">Ending Time</label>

                  <div class="col-sm-6">
                    <input type="datetime-local" class="form-control" name="btime" placeholder="Enter Ending Time" required="required">
                  </div>
                </div>
                  
               <div class="form-group">
                  <label class="col-sm-2 control-label">Property Image</label>
                  
                <div class="col-sm-6">
                    <input type="file" class="form-control" name="property_img" required="required">
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
<?php include '_inc/footer.php'; ?>
