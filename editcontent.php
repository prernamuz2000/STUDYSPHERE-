<?php
error_reporting(0);
include_once('header.php');
include_once('../config.php');



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
                                <h4 class="card-title">Content</h4>
                                <p class="card-description">
                                    Content To be Edit
                                </p>
                                <form class="forms-sample" method="post" enctype="multipart/form-data">
                                    <?php
                                    // $snid = $_GET['s_no'];
                                    $s_no = $_POST['s_no'];
                                    $content_id = $_GET['nid'];
                                    $target_content = $_POST['target_content'];
                                    $content = $_POST['content'];
                                    // In this section we have created a variable by name and we have to insert the ID which is coming from the URL 
                                    $showquery = "SELECT * FROM `content` WHERE s_no={$content_id}";
                                    // ->In this query we have to enter the primary key name from the database and enter the above ID to manage the data
                                    $showdata = mysqli_query($con, $showquery);
                                    $arrdata = mysqli_fetch_array($showdata);
                                    if (isset($_POST["edit_content_save_btn"])) {
                                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                            $edit_data = "UPDATE content SET target_content='{$target_content}',content='{$content}' WHERE s_no='{$content_id}'";
                                            $edit_data_query = mysqli_query($con, $edit_data);
                                        }
                                    }
                                    ?>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Serial Number</label>
                                        <input type="text" name="s_no" class="form-control" id="exampleInputName1" placeholder="Name" value="<?php echo $arrdata['s_no']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Targeted Location</label>
                                        <input type="text" name="target_content" class="form-control" id="exampleInputEmail3" placeholder="fees" value="<?php echo $arrdata['target_content']; ?>">
                                    </div>

                                    <div class="form-group pt-5">
                                        <label for="exampleTextarea1">Content</label>
                                        <div id="">
                                            <textarea name="content" class="summernote">
                                                <?php echo $arrdata['content']; ?>
                                            </textarea>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary mr-2" name="edit_content_save_btn">Update</button>
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
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block ">Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
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