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
              <h3 class="box-title">Add Electronics</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="_inc/add electronics.php" onsubmit="return fv()" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Title</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="elec_title" id="elec_title" placeholder="Enter Title" required="required">
                  </div>
                </div>
                  
                <div class="form-group">
                  <label class="col-sm-2 control-label">Type</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control"name="elec_type" id="elec_type" placeholder="Enter Type" required="required">
                  </div>
                </div>
                  
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Company</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="elec_company" id="elec_company" placeholder="Enter Company" required="required">
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Model</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control"name="elec_model" id="elec_model" placeholder="Enter Model" required="required">
                  </div>
                </div>
             
                  
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Starting Price</label>

                  <div class="col-sm-6">
                    <input type="double" class="form-control" name="elec_price" id="elec_price" placeholder="Enter Starting Price" required="required">
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
                  <label class="col-sm-2 control-label">Image</label>
                  
                <div class="col-sm-6">
                    <input type="file" class="form-control" name="elec_img" required="required">
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
  
<?php include '_inc/footer.php'; ?>
