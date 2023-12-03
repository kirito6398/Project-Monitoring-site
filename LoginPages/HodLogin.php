<?php
session_start();
include('../config.php');

if(isset($_POST['login']))
  {
 
    // Getting username/ email and password
    $prn=$_POST['prn'];
    $password=$_POST['password'];
    
    // Fetch data from database on the basis of username/email and password

    $sql =mysqli_query($con,"SELECT * FROM stud WHERE prn='$prn' ");
    $num=mysqli_fetch_array($sql);

    if($num>0)
    {
    $hashpassword=$num['password']; // Hashed password fething from database
    //verifying Password
    if ($password==$hashpassword) {
    $_SESSION['login']=$_POST['prn'];
    $_SESSION['prn']=$num['prn'];
    echo "<script>alert('login Sucessful');</script>";
        echo "<script type='text/javascript'> document.location = '../Dashboard/dashboard.php'; </script>";
    } 
    else {
        echo "<script>alert('Wrong Password');</script>";
    
        }
    }
//if username or email not found in database
else{
echo "<script>alert('User not registered with us');</script>";
  }
 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="login-box">
        <h2>HOD Login</h2>
        <form method="post">
          <div class="user-box">
            <input type="text" name="prn" required="">
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
          </div>
            <button class="btnNew" type="submit" name="login">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </button>
            <button class="btnNew sideMargin" type="button" onclick="window.location.href = '../RegisterPages/HODRegister.php';">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Register
            </button>
        </form>
      </div>
</body>
</html>