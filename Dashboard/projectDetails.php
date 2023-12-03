<?php
session_start();
include('../config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
{ 
header('location:login.php');
}
if($_GET['rid']){
  $id=intval($_GET['rid']);
  $query=mysqli_query($con,"delete from createProject where id='$id'");
  echo "<script>alert('Record successfully Deleted.');</script>";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>WebProX</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include('include/header.php');?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <?php include('include/sidebar.php');?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><button class="btn btn-light"> Project Details</button></h4>
                  <p class="card-description">
                    <!-- Manage Data Of Friday -->
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Student Names
                            </th>
                            <th>
                                Project Names
                            </th>
                        </tr>
                      </thead>
                      <tbody>
<?php 

$query=mysqli_query($con,"Select * from createProject");

$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
                        <tr>
                          <td class="py-1">
                            <?= $cnt ?>
                          </td>
                          <td>
                            <?= $row['stud1'] ?>
                            <br><hr>
                            <?= $row['stud2'] ?>
                            <br><hr>
                            <?= $row['stud3'] ?>
                            <br><hr>
                            <?= $row['stud4'] ?>
                          </td>
                          <td>
                            <?= $row['proj1'] ?>
                            <br><hr>
                            <?= $row['proj2'] ?>
                            <br><hr>
                            <?= $row['proj3'] ?>
                          </td>
                          
                          <td>
                            <a href="projectDetails.php?rid=<?php echo htmlentities($row['id']);?>"> <i class="fa fa-trash-o" style="color: #f05050"></i></a>
                          </td>
                        </tr>
<?php
$cnt++;
 } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
        <!-- content-wrapper ends -->
          <?php include('include/dash.php');?>
        <!-- partial:../../partials/_footer.html -->
       <?php include('include/footer.php');?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
