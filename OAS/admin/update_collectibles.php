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
              $sql = "SELECT * FROM collectibles WHERE id='$id'";
              $result = mysqli_query($conn, $sql);
              $result = mysqli_fetch_assoc($result);
              ?>
            <div class="box-header with-border">
              <h3 class="box-title">Add Collectibles</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST"action="_inc/update_collectibles.php?id=<?php echo $result['id']; ?>" onsubmit="return fv()" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Title</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="collect_title" id="collect_title" required="required" value="<?= $result['collect_title']; ?>" placeholder="Enter Title">
                  </div>
                </div>
                  
                <div class="form-group">
                  <label class="col-sm-2 control-label">Type</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control"name="collect_type" id="collect_type" required="required" value="<?= $result['collect_type']; ?>"placeholder="Enter Type">
                  </div>
                </div>
                  
                  
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Starting Price</label>

                  <div class="col-sm-6">
                    <input type="double" class="form-control" name="collect_price" id="collect_price" required="required" value="<?= $result['collect_price']; ?>" placeholder="Enter Starting Price">
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Ending Time</label>

                  <div class="col-sm-6">
                    <input type="datetime-local" class="form-control" name="btime" required="required" value="<?= $result['btime']; ?>" placeholder="Enter Ending Time">
                  </div>
                </div>
                  
               <div class="form-group">
                  <label class="col-sm-2 control-label">Image</label>
                  
                <div class="col-sm-6">
                    <input type="file" class="form-control" name="collect_img">
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
      <?php include '_inc/footer.php'; ?>
