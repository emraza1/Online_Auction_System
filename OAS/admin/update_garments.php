<?php include '_inc/head.php'; ?>
<?php include '_inc/header.php'; ?>
<?php include '_inc/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      
    <!-- Main content -->
    <section class="content">
             <!-- Horizontal Form -->
          <div class="box box-info">
               <?php
              include '_inc/db.php';
              $id = $_REQUEST['id'];
              $sql = "SELECT * FROM garments WHERE id='$id'";
              $result = mysqli_query($conn, $sql);
              $result = mysqli_fetch_assoc($result);
              ?>
            <div class="box-header with-border">
              <h3 class="box-title">Add Garments</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="_inc/update_garments.php?id=<?php echo $result['id']; ?>" onsubmit="return fv()" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Type</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="gar_type" id="gar_type" required="required" value="<?= $result['gar_type']; ?>"placeholder="Enter Garment type">
                  </div>
                </div>
                  
                <div class="form-group">
                  <label class="col-sm-2 control-label">Material</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control"name="gar_material" id="gar_material" required="required" value="<?= $result['gar_material']; ?>"placeholder="Enter Garment Material">
                  </div>
                </div>
                  
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Brand</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="gar_brand" id="gar_brand" required="required" value="<?= $result['gar_brand']; ?>" placeholder="Enter Brand name">
                  </div>
                </div>
             
                  
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Starting Price</label>

                  <div class="col-sm-6">
                    <input type="double" class="form-control" name="gar_price" id="gar_price" required="required" value="<?= $result['gar_price']; ?>"placeholder="Enter Starting Price">
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Ending Time</label>

                  <div class="col-sm-6">
                    <input type="datetime-local" class="form-control" name="btime" required="required" value="<?= $result['btime']; ?>" placeholder="Enter Ending Time">
                  </div>
                </div>
                  
                  
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Select</label>
                  
                  <div class="col-sm-6">
                  <select class="form-control" name="gender" required="required" value="<?= $result['gender']; ?>">
                    <option>Men</option>
                    <option>Women</option>
                  </select>
                </div>
               </div>
            
                   <div class="form-group">
                  <label class="col-sm-2 control-label">Condition</label>
                  
                  <div class="col-sm-6">
                  <select class="form-control" name="state" required="required" value="<?= $result['state']; ?>">
                    <option>New</option>
                    <option>Old</option>
                  </select>
                </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Image</label>
                  
                <div class="col-sm-6">
                    <input type="file" class="form-control" name="gar_img">
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
        var gar_type = document.getElementById('gar_type').value;
        var gar_type_regex = /^[a-zA-Z0-9 ]{3,35}$/;
        if (gar_type_regex.test(gar_type) == false) {
            alert("Enter accurate garment type data");
            return false;
        
    }
     var gar_material = document.getElementById('gar_material').value;
        var gar_material_regex = /^[a-zA-Z0-9 ]{4,25}$/;
        if (gar_material_regex.test(gar_material) == false) {
            alert("Enter accurate material data");
            return false;
        
    }
      var gar_brand = document.getElementById('gar_brand').value;
        var gar_brand_regex = /^[a-zA-Z0-9 ]{4,35}$/;
        if (gar_brand_regex.test(gar_brand) == false) {
            alert("Enter accurate brand data");
            return false;
        
    }

      var gar_price = document.getElementById('gar_price').value;
        var gar_price_regex = /^[0-9]{1,9}$/;
        if (gar_price_regex.test(gar_price) == false) {
            alert("Enter accurate price data");
            return false;
        
    }
     
    }
    </script>
<?php include '_inc/footer.php'; ?>
