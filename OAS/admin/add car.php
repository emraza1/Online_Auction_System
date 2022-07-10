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
              <h3 class="box-title">Add Car</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="_inc/add car.php" onsubmit="return fv()" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Car Title</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="car_title" id="car_title" placeholder="Enter Car Title" required="required">
                  </div>
                </div>
                  
                <div class="form-group">
                  <label class="col-sm-2 control-label">Model</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control"name="car_model" id="car_model" placeholder="Enter Model" required="required">
                  </div>
                </div>
                  
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Make Year</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="make_year" id="make_year" placeholder="Enter Make Year" required="required">
                  </div>
                </div>
             
                  
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Starting Price</label>

                  <div class="col-sm-6">
                    <input type="double" class="form-control" name="car_price" id="car_price" required="required" placeholder="Enter Starting Price in US dollars">
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Ending Time</label>

                  <div class="col-sm-6">
                    <input type="datetime-local" class="form-control" name="btime" id="btime" required="required" placeholder="Enter Ending Time e.g. 2018-12-03 10:00:00">
                  </div>
                </div>
                  
                  
            
             
              <div class="form-group">
                  <label class="col-sm-2 control-label">Mileage</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="mileage" id="mileage" placeholder="Enter Mileage" required="required">
                  </div>
                </div>
            
  
              <div class="form-group">
                  <label class="col-sm-2 control-label">Fuel Type</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="fuel" id="fuel" placeholder="Enter Fuel Type" required="required">
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
                  <label class="col-sm-2 control-label">Car Image</label>
                  
                <div class="col-sm-6">
                    <input type="file" class="form-control" name="car_img" required="required">
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
        var car_title = document.getElementById('car_title').value;
        var car_title_regex = /^[a-zA-Z0-9 ]{3,25}$/;
        if (car_title_regex.test(car_title) == false) {
            alert("Enter accurate car title data");
            return false;
        
    }
     var car_model = document.getElementById('car_model').value;
        var car_model_regex = /^[a-zA-Z0-9 ]{3,25}$/;
        if (car_model_regex.test(car_model) == false) {
            alert("Enter accurate car model data");
            return false;
        
    }
      var make_year = document.getElementById('make_year').value;
        var make_year_regex = /^[a-zA-Z0-9 ]{4,10}$/;
        if (make_year_regex.test(make_year) == false) {
            alert("Enter accurate car make year data");
            return false;
        
    }
      var car_price = document.getElementById('car_price').value;
        var car_price_regex = /^[0-9]{1,9}$/;
        if (car_price_regex.test(car_price) == false) {
            alert("Enter accurate car price data");
            return false;
        
    }
      var mileage = document.getElementById('mileage').value;
        var mileage_regex = /^[a-zA-Z0-9 ]{2,25}$/;
        if (mileage_regex.test(mileage) == false) {
            alert("Enter accurate car mileage data");
            return false;
        
    }
     var fuel = document.getElementById('fuel').value;
        var fuel_regex = /^[a-zA-Z ]{3,20}$/;
        if (fuel_regex.test(fuel) == false) {
            alert("Enter accurate car fuel data");
            return false;
        
    }
    }
    </script>
    
<?php include '_inc/footer.php'; ?>
