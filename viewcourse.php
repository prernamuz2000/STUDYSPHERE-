<?php

include_once('header.php');

  include_once('myconnection.php');

    $nid = $_REQUEST['nid'];
    if($nid!=""){
      $del="DELETE FROM course WHERE course_id = '$nid'";
      mysqli_query($con,$del);
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
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">View course table</h4>
               
                  <div class="table-responsive pt-3">
                    <form method="post">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            S.No
                          </th>
                          <th>
                            Course Name
                          </th>
                          <th>
                            Fees
                          </th>
                          <th>
                            Discount
                          </th>
                          <th>
                            Image
                          </th>
                          <th>
                            Des
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Edit / Delete
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                           $sel="SELECT * FROM course";
                          $exe=mysqli_query($con,$sel);
                          while($fetch=mysqli_fetch_array($exe)){

                        ?>
                        <tr>
                          <td>
                          <?php echo $fetch['course_id'];?>
                          </td>
                        
                          <td>
                          <?php echo $fetch['course_name'];?>

                          </td>
                          <td>
                          <?php echo $fetch['course_fees'];?>

                          </td>
                          <td>
                          <?php echo $fetch['course_discount'];?>
                           
                          </td>
                          <td>
                            <img src="gallery_image/<?php echo $fetch['course_image'];?>" alt="" width="150">
                          </td>
                          <td>
                          <?php echo $fetch['course_des'];?>

                          </td>
                          <td>
                          <?php echo $fetch['course_status'];?>

                          </td>
                          <td>
                            <button class=" bg-warning "><a href="addcourse.php?nid=<?php echo $fetch['course_id'];?>">Edit</a></button>
                            <button class=" bg-danger text-white"><a href="viewcourse.php?nid=<?php echo $fetch['course_id'];?>">Delete</a></button>

                          </td>
                        </tr>
                            <?php
                          }
                            ?>
                      </tbody>
                    </table>
                    </form>
                  </div>
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
