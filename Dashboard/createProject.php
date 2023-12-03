
<?php
          session_start(); 
          include('../config.php');
          //Code for Registration 
         
        
          if(isset($_POST['submit']))
          {
          $stud1=$_POST['stud1'];
          $stud2=$_POST['stud2'];
          $stud3=$_POST['stud3'];
          $stud4=$_POST['stud4'];
          $proj1=$_POST['proj1'];
          $proj2=$_POST['proj2'];
          $proj3=$_POST['proj3'];

       

          $query=mysqli_query($con,"
            insert into createProject(stud1,stud2,stud3,stud4,proj1,proj2,proj3) values('$stud1','$stud2','$stud3','$stud4','$proj1','$proj2','$proj3')");

          if($query)
          {
            echo "<script>alert('Data added successfully.');</script>";
          }
          else{
             echo "<script>alert('Error.');</script>";
          } 
          }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Project Management System</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
 
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
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><button class="btn btn-primary mr-2">Create Project</button></h4>
                  <p class="card-description">
                   <!-- <span> Thursday Task </span> -->
                  </p>
                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputUsername1">1<sup>st</sup> Member</label>
                      <input type="text" class="form-control" placeholder="Member Name" name="stud1" required="" value="<?php echo htmlspecialchars($_POST['name'] ?? '',ENT_QUOTES); ?>">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputConfirmPassword1">2<sup>nd</sup> Member</label>
                      <input type="text" class="form-control" placeholder="Member Name" name="stud2"  required="" value="<?php echo htmlspecialchars($_POST['contact'] ?? '',ENT_QUOTES); ?>">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">3<sup>re</sup> Member</label>
                      <input type="text" class="form-control" placeholder="Member Name" name="stud3" required="" value="<?php echo htmlspecialchars($_POST['address'] ?? '',ENT_QUOTES); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">4<sup>th</sup> Member</label>
                      <input type="text" class="form-control" placeholder="Member Name" name="stud4" required="" value="<?php echo htmlspecialchars($_POST['city'] ?? '',ENT_QUOTES); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">1<sup>st</sup> Project</label>
                      <input type="text" class="form-control" placeholder="Project Name" name="proj1" required="" value="<?php echo htmlspecialchars($_POST['city'] ?? '',ENT_QUOTES); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">2<sup>nd</sup> Project</label>
                      <input type="text" class="form-control" placeholder="Project Name" name="proj2" required="" value="<?php echo htmlspecialchars($_POST['city'] ?? '',ENT_QUOTES); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">3<sup>re</sup> Project</label>
                      <input type="text" class="form-control" placeholder="Project Name" name="proj3" required="" value="<?php echo htmlspecialchars($_POST['city'] ?? '',ENT_QUOTES); ?>">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                   
                  </form>
                </div>
              </div>
            </div>
            
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
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
  <script src="../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/file-upload.js"></script>
  <script src="../js/typeahead.js"></script>
  <script src="../js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
