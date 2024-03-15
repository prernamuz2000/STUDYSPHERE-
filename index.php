<?php 
error_reporting(0);
include_once('header.php');
include_once('myconnection.php');
if(isset($_POST['login']))
{
  $username=$_POST['user'];
  $password=$_POST['pass'];

  $sel="SELECT * FROM adminlogin where login_username='$username' and login_password='$password'";
  $exe=mysqli_query($con,$sel);
  $tot= mysqli_num_rows($exe);
  // echo $sel;
  // die;
  if($tot==1){
    $fetch=mysqli_fetch_array($exe);
    $_SESSION['ADMIN_ID']=$fetch['login_id'];
     echo "<script>window.location='dashboard.php'</script>";
  }
  else{
    $msg="Invalid username or password";
  }


}

  ?>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo.svg" alt="logo">
              </div>
              <h4><?php
                echo $msg
              ?></h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="user">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="pass">
                </div>
                <div class="mt-3">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" ><input  type="submit" name="login" style="    font-size: 25px;
    background: inherit;
    color: white;
    border: 0;
"></a>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
               
               
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
<?php 
  include_once('footeer.php');
  include_once('script.php');

  ?>
</body>

</html>
