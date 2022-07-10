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
              <h3 class="box-title">View Cars</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>title</th>
                  <th>model</th>
                  <th>make year</th>
                  <th>starting price</th>
                  <th>current price</th>
                  <th>ending time</th>
                  <th>mileage</th>
                  <th>fuel</th>
                  <th>state</th>
                  <th>delete</th>
                  <th>update</th>
                </tr>
                </thead>
                
                <tbody>
                <?php
                include '_inc/db.php';
                
                $sql="SELECT * FROM cars";
                $result = mysqli_query($conn,$sql);
                foreach($result as $value){
                   echo" <tr>
                    <td>".$value['id']."</td>
                    <td>".$value['car_title']."</td>
                    <td>".$value['car_model']."</td>
                    <td>".$value['make_year']."</td>
                    <td>".$value['car_price']."</td>
                   <td>".$value['cur_price']."</td>
                    <td>".$value['btime']."</td>
                    <td>".$value['mileage']."</td>
                    <td>".$value['fuel']."</td>
                    <td>".$value['state']."</td>
                    <td><a class='btn btn-danger' href='_inc/delete.php?id=".$value['id']." &from=cars'>Delete</a></td>
                    <td><a class='btn btn-success' href='update_car.php?id=".$value['id']."'>Update</a></td>
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
