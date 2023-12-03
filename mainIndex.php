<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="login-box">
        <h2>Who Are You ?</h2>
        <form>
          
            <button class="btnNew" type="button" onclick="window.location.href = './LoginPages/StudentLogin.php';">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Student
            </button>
            <button class="btnNew sideMargin" type="button" onclick="window.location.href = './LoginPages/MentorLogin.php';">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Mentor
            </button>
            <button class="btnNew" type="button" onclick="window.location.href = './LoginPages/ProjCoordinatorLogin.php';">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Project Coordinator
            </button>
        </form>
      </div>
</body>
</html>