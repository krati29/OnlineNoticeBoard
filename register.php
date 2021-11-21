<?php
$connection = mysqli_connect("localhost","root","root");
$db = mysqli_select_db($connection,"online_notice_board");

if(isset($_POST['register'])){
    $query = "insert into users values(null,'$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[password]',$_POST[semester])";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        echo "<script>alert('Registration Successful');
        window.location.href = 'index.html';
        </script>";
    }
    else{
        echo "<script>alert('Registration Failed');
        window.location.href = 'register.php';
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
<!-- Registration Form code start -->
<section id="register_form">
    <div class="row">
        <div class="col-md-4 m-auto block">
            <center><h4>Registration Form</h4></center>
            <form name="register" action="" method="post">
                <div class="form-group">
                    <label>First Name:</label>
                    <input class="form-control" type="text" name="fname" placeholder="Enter your first name">
                </div>
                <div class="form-group">
                    <label>Last Name:</label>
                    <input class="form-control" type="text" name="lname" placeholder="Enter your Last Name">
                </div>
                <div class="form-group">
                    <label>Email ID:</label>
                    <input class="form-control" type="text" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label>Password: </label>
                    <input class="form-control" type="password" name="password" placeholder="Enter your password">
                </div>
                <div class="form-group">
                    <label>Select your Semester:</label>
                    <select class="form-control" name="semester">
                        <option>-Select-</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit" name="register" onclick="return validateReg()">Register</button>
            </form>
            <a href="login.php">Click here to Login</a>
        </div>
    </div>
</section>
</body>
</html>