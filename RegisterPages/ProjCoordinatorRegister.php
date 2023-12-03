
<?php
include('../config.php');

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $prn = $_POST['prn'];
    $dept = $_POST['dept'];
    $password = $_POST['password'];

    // Check if the PRN already exists in the database
    $check_query = mysqli_query($con, "SELECT * FROM stud WHERE prn = '$prn'");
    if(mysqli_num_rows($check_query) > 0)
    {
        echo "<script>alert('PRN already exists. Please choose a different PRN.');</script>";
    }
    else
    {
        // Insert the new record if PRN doesn't exist
        $query = mysqli_query($con, "INSERT INTO stud (name, lname, email, contact, prn, dept, password) VALUES ('$name', '$lname', '$email', '$contact', '$prn', '$dept', '$password')");

        if($query)
        {
            echo "<script>alert('Registration Successful');</script>";
            echo "<script type='text/javascript'> document.location = '../LoginPages/ProjCoordinatorLogin.php'; </script>";
        }
        else
        {
            echo "<script>alert('Error.');</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>WebProX</title>
  <title></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  
</head>

<body>
<div class="login-box box mt-5">
        <h2>Project Coordinator Register</h2>
        <form method="post">
          <div class="user-box">
            <input type="text" name="name" required="">
            <label>First Name</label>
          </div>
          <div class="user-box">
            <input type="text" name="lname" required="">
            <label>Last Name</label>
          </div>
          <div class="user-box">
            <input type="email" name="email" required="">
            <label>Email</label>
          </div>
          <div class="user-box">
            <input type="number" name="contact" required="">
            <label>Contact</label>
          </div>
          <div class="user-box">
            <input type="number" name="prn" required="">
            <label>PRN</label>
          </div>
          <div class="user-box">
            <input type="text" name="dept" required="">
            <label>Departmewnt</label>
          </div>
          
          <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
          </div>
            <button class="btnNew" type="submit" name="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </button>
            
        </form>
      </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
