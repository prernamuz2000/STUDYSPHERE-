<?php
error_reporting(0);
  include_once('header.php');
  include_once('myconnection.php');
  $nid = $_GET['nid'];
  if($nid==""){
  if(isset($_POST['save'])){
    $simage=$_FILES['simage'];
    $imagename=time().rand(1,99999).$simage['name'];
    $tmpname=$simage['tmp_name'];
    $path="gallery_image/".$imagename;
    move_uploaded_file($tmpname,$path);
    $sname=$_POST['sname'];
    $sheading=$_POST['sheading'];
    $des=$_POST['sdes'];
    $status=$_POST['sstatus'];

    $ins="INSERT INTO slider SET
    
    slider_name='$sname',
    slider_heading='$sheading',
    slider_image='$imagename',
    slider_des='$des',
    slider_status='$status'";

    mysqli_query($con,$ins);
    header('Location:viewslider.php');


  }
}
else{
  $sel="SELECT * from slider where slider_id = '$nid'";
  $exe=mysqli_query($con,$sel);
  $fetch=mysqli_fetch_array($exe);

  if(isset($_POST['save'])){
    $simage=$_FILES['simage'];
    $imagename=time().rand(1,99999).$simage['name'];
    $tmpname=$simage['tmp_name'];
    $path="gallery_image/".$imagename;
    move_uploaded_file($tmpname,$path);
    $sname=$_POST['sname'];
    $sheading=$_POST['sheading'];
    $des=$_POST['sdes'];
    $status=$_POST['status'];

    $ins="UPDATE slider SET
    
    slider_name='$sname',
    slider_heading='$sheading',
    slider_image='$imagename',
    slider_des='$des',
    slider_status='$status' WHERE slider_id='$nid'";
    mysqli_query($con,$ins);
    header('Location:viewslider.php');

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
                  <h4 class="card-title">Slider</h4>
                  <p class="card-description">
                    Slider
                  </p>
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Slider heading</label>
                      <input type="text" name="sname" class="form-control" id="exampleInputName1" placeholder="Name" value="<?php echo $fetch['slider_name'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Slider Sub heading</label>
                      <input type="text" name="sheading" class="form-control" id="exampleInputEmail3" placeholder="topic" value="<?php echo $fetch['slider_heading'];?>">
                    </div>
                  
                  
                   
                    <div class="form-group">
                      <label>Slider Image</label>
                      <input type="file" name="simage" class="file-upload-default" id="file-input">
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
                        <textarea name="sdes" id="summernote" >
                       <?php echo $fetch['slider_des'];?>
                        </textarea>
                      </div>
                    </div>
                    <div class="form-group">  
                      <label for="exampleSelectGender">Status</label><br/>
                        <input type="radio" name="status" class="mr-2" value="<?php echo $fetch['slider_status'];?>"  >Activce
                        <input type="radio" name="status" class="mx-2" value="<?php echo $fetch['slider_status'];?>">Deactive
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
  include_once('script.php');
?>
</body>

</html>
