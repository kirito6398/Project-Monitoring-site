
<?php
          session_start(); 
          include('../config.php');
          //Code for Registration 
         
        
          if(isset($_POST['submit']))
          {
          $name=$_POST['name'];
          $discuss=$_POST['discuss'];
       

          $query=mysqli_query($con,"
            insert into mentordiscussion(name,discuss) values('$name','$discuss')");

          if($query)
          {
            echo "<script>alert('Message Sent.');</script>";
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
    <?php include('includeMentor/headerMentor.php');?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      
      
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
       
      <?php include('includeMentor/sidebarMentor.php');?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><button class="btn btn-primary mr-2">Discussion Panel</button></h4>
                  <p class="card-description">
                   <!-- <span> Thursday Task </span> -->
                  </p>
                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control" placeholder="Name" name="name" required="" value="<?php echo htmlspecialchars($_POST['name'] ?? '',ENT_QUOTES); ?>">
                    </div>
                    <div class="form-group">
                      <!-- <label for="exampleInputUsername1">1<sup>st</sup> Member</label> -->
                      <textarea style="height:200px" class="form-control" placeholder="Write something..." name="discuss" required="" value="<?php echo htmlspecialchars($_POST['name'] ?? '',ENT_QUOTES); ?>"></textarea>
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
         <?php include('includeMentor/footerMentor.php');?>
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
