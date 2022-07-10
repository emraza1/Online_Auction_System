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
              <h3 class="box-title">View Property</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>type</th>
                  <th>location</th>
                  <th>no. of rooms</th>
                  <th>starting price</th>
                  <th>current price</th>
                  <th>ending time</th>
                  <th>delete</th>
                  <th>update</th>
                </tr>
                </thead>
                
                <tbody>
                <?php
                include '_inc/db.php';
                
                $sql="SELECT * FROM property";
                $result = mysqli_query($conn,$sql);
                foreach($result as $value){
                   echo" <tr>
                    <td>".$value['id']."</td>
                    <td>".$value['property_type']."</td>
                    <td>".$value['property_loc']."</td>
                    <td>".$value['rooms']."</td>
                    <td>".$value['property_price']."</td>
                        <td>".$value['cur_price']."</td>
                    <td>".$value['btime']."</td>
                    <td><a class='btn btn-danger' href='_inc/delete.php?id=".$value['id']." &from=property'>Delete</a></td>
                    <td><a class='btn btn-success' href='update_property.php?id=".$value['id']."'>Update</a></td>
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
