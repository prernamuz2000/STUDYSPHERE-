
<?php
include_once('header.php');

  include_once('myconnection.php');
error_reporting(0);

 $nid = $_GET['nid'];
  if($nid==""){
  if(isset($_POST['save'])) {
    
    $name=$_POST['course'];
    $topic=$_POST['topic'];
    $videoss=$_POST['videos'];

    $status=$_POST['status'];  

    $ins="INSERT INTO coursevideos SET
          coursevideos_course='$name',
          coursevideos_topic='$topic',
          coursevideos_videos='$videoss',
          coursevideos_status='$status'";

          mysqli_query($con,$ins);
          header("Location:viewvideo.php");
  }
}
else{

  $sel1="SELECT * FROM coursevideos where coursevideos_id = '$nid'";
  $exe1=mysqli_query($con,$sel1);
  $fetch1=mysqli_fetch_array($exe1);

  if(isset($_POST['save'])) {

    $name=$_POST['course'];
    $topic=$_POST['topic'];
    $videoss=$_POST['videos'];

    $status=$_POST['status'];  

    $ins="UPDATE coursevideos SET
          coursevideos_course='$name',
          coursevideos_topic='$topic',
          coursevideos_videos='$videoss',
          coursevideos_status='$status'WHERE coursevideos_id = '$nid'";

          mysqli_query($con,$ins);
          header("Location:viewvideo.php");

        }
  }


?>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php
    
      include_once('nav.php');

      

    ?>
      <!-- partial -->
      <div class="main-panel">

        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Course</h4>
                  <p class="card-description">
                    Course
                  </p>
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleSelectGender">Course</label>
                        <select class="form-control" id="exampleSelectGender" name="course" >
                          <?php

                               $sel="SELECT * FROM course ";
                                $exe=mysqli_query($con,$sel);
                                  while($fetch=mysqli_fetch_array($exe)){
                           ?>
                          <option value="<?php echo $fetch['course_id'];?>"><?php echo $fetch['course_name'];?></option>
                          <?php 
                        }
                          ?>
                        </select>
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Topic</label>
                      <input type="text" name="topic" class="form-control" id="exampleInputEmail3" placeholder="fees" value="<?php echo $fetch1['coursevideos_topic'];?>" >
                    </div>
                  
                   
                    <div class="form-group">
                      <label>Video</label>
                          <input type="text" name="videos" class="form-control" >

                     </div>
                  
                
                  <div class="form-group">
                      <label for="exampleSelectGender">Status</label><br/>
                        <input type="radio" name="status" class="mr-2" value="1">Activce
                        <input type="radio" name="status " class="mx-2" value="0" >Deactive
                      </div>
                    <button type="submit" class="btn btn-primary mr-2" name="save">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <?php
    include_once('footeer.php');
  ?>
</body>

</html>
