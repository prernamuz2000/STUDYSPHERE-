<?php
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
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">View Website Content</h4>

                                <div class="table-responsive pt-3">
                                    <form method="post">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        S.No
                                                    </th>
                                                    <th>
                                                        Targeted Section
                                                    </th>
                                                    <th>
                                                        Content
                                                    </th>
                                                    <th>
                                                        Edit
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sel = "SELECT * FROM content";
                                                $exe = mysqli_query($con, $sel);
                                                while ($fetch = mysqli_fetch_array($exe)) {

                                                ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $fetch['s_no']; ?>
                                                        </td>

                                                        <td>
                                                            <?php echo $fetch['target_content']; ?>

                                                        </td>
                                                        <td>
                                                            <?php echo $fetch['content']; ?>

                                                        </td>

                                                        <td>
                                                            <button class=" bg-warning "><a href="editcontent.php?nid=<?php echo $fetch['s_no']; ?>">Edit</a></button>
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
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
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