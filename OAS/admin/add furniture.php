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
              <h3 class="box-title">Add Furniture</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="_inc/add furniture.php" onsubmit="return fv()" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Type</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="fur_type" id="fur_type" placeholder="Enter Furniture Type" required="required">
                  </div>
                </div>
                  
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pieces</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control"name="fur_pieces" id="fur_pieces" placeholder="Enter number of pieces" required="required">
                  </div>
                </div>
                  

                  <div class="form-group">
                  <label class="col-sm-2 control-label">Starting Price</label>

                  <div class="col-sm-6">
                    <input type="double" class="form-control" name="fur_price" id="fur_price" placeholder="Enter Starting Price" required="required">
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
                  <label class="col-sm-2 control-label">Furniture Image</label>
                  
                <div class="col-sm-6">
                    <input type="file" class="form-control" name="fur_img" required="required">
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
<?php include '_inc/footer.php'; ?>
