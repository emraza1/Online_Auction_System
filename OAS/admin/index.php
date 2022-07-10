<?php
session_start();
if(isset($_SESSION['admin_data']) && !empty($_SESSION['admin_data'])){
    header("Location: http://localhost/OAS/admin/dashboard.php");
    
}
if(isset($_GET['email']) && isset($_GET['password'])){
    include '_inc/db.php';
    $email = $_GET['email'];
    $password = $_GET['password'];
    //$password = md5($password);
    //echo $password;exit;
    $login_query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $login_query);
 $num_rows = mysqli_num_rows($result);
    if ($num_rows == 1)
    {
         $_SESSION['admin_data'] = mysqli_fetch_assoc($result);
        header("Location: http://localhost/OAS/admin/dashboard.php");
       
    }
   else
    {
        echo "Error";
        exit;
    }  
}
?>

<?php include '_inc/head.php';?>
<body class="hold-transition login-page" Style="background-color:#eec7b7">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><center><img src="../img/logo1.png" style=" width:400px;"/> </center> Admin Panel</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in</p>

    <form method="GET">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span> <br>
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button> <br>
        </div>
      </div>
      
    
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
