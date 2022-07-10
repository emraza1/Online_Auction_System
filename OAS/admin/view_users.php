<?php include '_inc/check.php';?>
<?php include '_inc/head.php'; ?>
<?php include '_inc/header.php'; ?>
<?php include '_inc/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      
    <!-- Main content -->
    <section class="content">
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">View Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>username</th>
                  <th>email</th>
                  <th>password</th>
                  <th>gender</th>
                  <th>phone</th>
                  
                  <th>country</th>
                  
                  <th>delete</th>
                  <th>update</th>
                </tr>
                </thead>
                
                <tbody>
                <?php
                include '_inc/db.php';
                
                $sql="SELECT * FROM users";
                $result = mysqli_query($conn,$sql);
                foreach($result as $value){
                   echo" <tr>
                    <td>".$value['u_id']."</td>
                    <td>".$value['username']."</td>
                    <td>".$value['email']."</td>
                    <td>".$value['password']."</td>
                    <td>".$value['gender']."</td>
                    <td>".$value['phone']."</td>
                   
                    <td>".$value['country']."</td>
                   
                    <td><a class='btn btn-danger' href='_inc/delete_user.php?u_id=".$value['u_id']." &from=users'>Delete</a></td>
                    <td><a class='btn btn-success' href='update_users.php?u_id=".$value['u_id']."'>Update</a></td>
                    </tr>";
                }
                
                ?>
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
 

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include '_inc/footer.php'; ?>
