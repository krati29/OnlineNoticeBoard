<?php
$connection = mysqli_connect("localhost","root","root");
$db = mysqli_select_db($connection,"online_notice_board");

if(isset($_POST['login'])){
    $query = "select * from users where email = '$_POST[email]' AND password = '$_POST[password]'";
    $query_run = mysqli_query($connection, $query);
    if(mysqli_num_rows($query_run)){
        while($row = mysqli_fetch_assoc($query_run)){
        echo "<script>window.location.href = 'userDashboard.php';
        </script>";
    }
    }
    else{
        echo "<script>alert('Login Failed, Please enter correct email id and password');
        window.location.href = 'login.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Notice Board</title>
    <!-- CSS FILE -->
    <link rel="stylesheet" href="css/style1.css">
     <!-- BOOTSTRAP FILES -->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <!-- <script src="bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script> -->
    <script type="text/javascript" src="js/myScript.js"></script>
</head>
<body>
    <!-- Header section starts here -->
<header>
    <nav id="navbar">
    <div class="container">
          <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="admin/index.php">Admin Login</a></li>
          <li><a href="login.php">User Login</a></li>
          <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
    </nav>
</header> 

<div class="row" id="header">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
    <h3>Online Notice Board</h3>    
</div>
    <div class="col-md-4">
    </div>
</div>
<!-- Login Form code start -->
<section id="login_form">
    <div class="row">
        <div class="col-md-4 m-auto block">
            <center><h4>Login Form</h4></center>
            <form name="login" method="post">
                <div class="form-group">
                    <label>Email ID:</label>
                    <input class="form-control" type="text" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label>Password: </label>
                    <input class="form-control" type="password" name="password" placeholder="Enter your password">
                </div>
                <button class="btn btn-primary" type="submit" name="login" onclick="return validateLogin()">Login</button>
            </form>
            <a href="register.php">Click here to register</a>
        </div>
    </div>
</secti on>
</body>
</html>