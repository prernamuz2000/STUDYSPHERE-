<?php
// error_reporting(0);
include_once('header.php');
include_once('../config.php');
// $nid = $_GET['nid'];
// if ($nid == "") {
//   if (isset($_POST['save'])) {

//     $image = $_FILES['images'];
//     $imgname = time() . rand(1, 99999) . $image['name'];
//     $tmpname = $image['tmp_name'];
//     $path = "gallery_image/" . $imgname;
//     move_uploaded_file($tmpname, $path);
//     $tname = $_POST['tname'];
//     $tcat = $_POST['tcat'];
//     $tstauts = $_POST['tstauts'];

//     $ins = "INSERT INTO team SET
//             team_name='$tname',
//             team_cat='$tcat',
//             team_image='$imgname',
//             team_stauts='$tstauts'";

//     mysqli_query($con, $ins);
//     header("Location:viewteam.php");
//   }
// } else {

//   $sel = "SELECT * FROM team where team_id = '$nid'";
//   $exe = mysqli_query($con, $sel);
//   $fetch = mysqli_fetch_array($exe);

//   if (isset($_POST['save'])) {

//     $image = $_FILES['images'];
//     $imgname = time() . rand(1, 99999) . $image['name'];
//     $tmpname = $image['tmp_name'];
//     $path = "gallery_image/" . $imgname;
//     move_uploaded_file($tmpname, $path);
//     $tname = $_POST['tname'];
//     $tcat = $_POST['tcat'];
//     $tstauts = $_POST['tstauts'];

//     $ins = "UPDATE  team Set
//             team_name='$tname',
//             team_cat='$tcat',
//             team_image='$imgname',
//             team_stauts='$tstauts' where team_id = '$nid'";

//     mysqli_query($con, $ins);
//     header("Location:viewteam.php");
//   }
// }
// $sql = "SELECT * FROM `contact_form`";
// $result = mysqli_query($con, $sql);

// $num = mysqli_num_rows($result);
// echo $num;

// if ($num > 0) {
//   $row = mysqli_fetch_assoc($result);
//   echo var_dump($row);
// }
?>


<body>

  <?php

  include_once('nav.php');
  ?>
  <!-- partial -->
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Company</th>
          <th scope="col">Message</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `contact_form`";
        $query = mysqli_query($con, $sql);

        // $num = mysqli_num_rows($query);
        // echo $num;

        while ($res = mysqli_fetch_assoc($query)) {
        ?>
          <tr>
            <td style="vertical-align: 0;"><?php echo $res['s_no']; ?></td>
            <td style="vertical-align: 0;"><?php echo $res['contact_name']; ?></td>
            <td style="vertical-align: 0;"><?php echo $res['contact_email']; ?></td>
            <td style="vertical-align: 0;"><?php echo $res['contact_company']; ?></td>
            <td style="vertical-align: 0;"><?php echo $res['contact_message']; ?></td>

          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  </div>

  </div>
  <?php
  include_once('script.php');
  ?>
</body>

</html>