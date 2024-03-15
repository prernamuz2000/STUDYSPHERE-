<?php
error_reporting(0);
include_once('header.php');
  include_once('myconnection.php');
  $nid=$_GET['nid'];
  if($nid==""){
    if(isset($_POST['save'])){

      $image=$_FILES['images'];
      $imgname=time().rand(1,99999).$image['name'];
      $tmpname=$image['tmp_name'];
      $path="gallery_image/".$imgname;
      move_uploaded_file($tmpname,$path);
      $cname=$_POST['cname'];
      $cprice=$_POST['cprise'];
      $cdiscount=$_POST['cdiscount'];
      $cdes=$_POST['cdes'];
      $cstatus=$_POST['cstatus'];
  
      $ins="INSERT INTO course SET
            course_name='$cname',
            course_fees='$cprice',
            course_discount='$cdiscount',
            course_image='$imgname',
            course_des='$cdes',
            course_status='$cstatus'";
  
            mysqli_query($con,$ins);
            header("Location:viewcourse.php");

  
    }
  }
    else{

      $sel="SELECT * FROM course where course_id = '$nid'";
      $exe=mysqli_query($con,$sel);
      $fetch=mysqli_fetch_array($exe);

      if(isset($_POST['save'])){

        $image=$_FILES['images'];
        $imgname=time().rand(1,99999).$image['name'];
        $tmpname=$image['tmp_name'];
        $path="gallery_image/".$imgname;
        move_uploaded_file($tmpname,$path);
        $cname=$_POST['cname'];
        $cprice=$_POST['cprise'];
        $cdiscount=$_POST['cdiscount'];
        $cdes=$_POST['cdes'];
        $cstatus=$_POST['cstatus'];
    
        $ins="UPDATE  course Set
              course_name='$cname',
              course_fees='$cprice',
              course_discount='$cdiscount',
              course_image='$imgname',
              course_des='$cdes',
              course_status='$cstatus' where course_id = '$nid'";
    
              mysqli_query($con,$ins);
              header("Location:viewcourse.php");

    
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
                      <label for="exampleInputName1">Course Name</label>
                      <input type="text" name="cname" class="form-control" id="exampleInputName1" placeholder="Name" value="<?php echo $fetch['course_name']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Course Fees</label>
                      <input type="text" name="cprise" class="form-control" id="exampleInputEmail3" placeholder="fees" value="<?php echo $fetch['course_fees']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Discount</label>
                      <input type="text" name="cdiscount" class="form-control" id="exampleInputPassword4" placeholder="dicount" value="<?php echo $fetch['course_discount']; ?>">
                    </div>
                   
                    <div class="form-group">
                      <label>Image</label>
                      <input type="file" name="images" class="file-upload-default" id="file-input" value="<?php echo $fetch['course_image']; ?>">
                      <div  class="pb-5">
      <img id="image-preview" align='right'src="http://www.clker.com/cliparts/c/W/h/n/P/W/generic-image-file-icon-hi.png" alt="your image" title=''  />
    </div>
                    </div>
                      <div class="input-group col-xs-12 col-lg-10">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                     
                  
                    <div class="form-group pt-5">
                      <label for="exampleTextarea1">Description</label>
                      <div id="">
                        <textarea name="cdes" id="summernote" >
                        <?php echo $fetch['course_des']; ?>
                        </textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Status</label><br/>
                        <input type="radio" name="cstatus" class="mr-2" value="1" <?php if($fetch['course_status']==1 and $fetch['course_status']!="") echo "checked";?>>Activce
                        <input type="radio" name="cstatus " class="mx-2" value="0" <?php if($fetch['course_status']==0 and $fetch['course_status']!="") echo "checked";?>>Deactive
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
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block ">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
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
  include_once('script.php');
?>
</body>

</html>
