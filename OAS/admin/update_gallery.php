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
              $sql = "SELECT * FROM gallery WHERE id='$id'";
              $result = mysqli_query($conn, $sql);
              $result = mysqli_fetch_assoc($result);
              ?>
            <div class="box-header with-border">
              <h3 class="box-title">Gallery</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST"action="_inc/update_gallery.php?id=<?php echo $result['id']; ?>" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Title</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="title" required="required" value="<?= $result['title']; ?>" placeholder="Enter Title">
                  </div>
                </div>
                  
               <div class="form-group">
                  <label class="col-sm-2 control-label">Image</label>
                  
                <div class="col-sm-6">
                    <input type="file" class="form-control" name="gallery">
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
<?php include '_inc/footer.php'; ?>
