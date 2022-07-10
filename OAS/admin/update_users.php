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
              $u_id = $_REQUEST['u_id'];
              $sql = "SELECT * FROM users WHERE u_id='$u_id'";
              $result = mysqli_query($conn, $sql);
              $result = mysqli_fetch_assoc($result);
              ?>
            <div class="box-header with-border">
              <h3 class="box-title">Add Car</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="_inc/update_users.php?u_id=<?php echo $result['u_id']; ?>" onsubmit="return fv()" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="username" value="<?= $result['username']; ?>" id="car_title" placeholder="Enter Username">
                  </div>
                </div>
                  
                <div class="form-group">
                  <label class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?= $result['email']; ?>" id="email" placeholder="Enter Email">
                  </div>
                </div>
                  
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="password" value="<?= $result['password']; ?>"  placeholder="Enter Password">
                  </div>
                </div>
             
                  
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Gender</label>

                  <div class="col-sm-6">
                  <select class="form-control" name="gender" value="<?= $result['gender']; ?>" >
                    <option>male</option>
                    <option>female</option>
                  </select>
                </div>
               </div>
            
             
              <div class="form-group">
                  <label class="col-sm-2 control-label">Phone</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?= $result['phone']; ?>" placeholder="Enter Phone">
                  </div>
                </div>
            
  
             
                  
                    <div class="form-group">
                  <label class="col-sm-2 control-label">Country</label>
                  
                  
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="country" value="<?= $result['country']; ?>" placeholder="Enter Country">
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
