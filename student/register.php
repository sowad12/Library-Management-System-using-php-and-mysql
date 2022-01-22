<?php
require_once ('../db.php');

if(isset($_POST['student_register'])){
//   echo '<pre>';
//   print_r($_POST);
//   echo '</pre>';
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $roll=$_POST['roll'];
  $reg=$_POST['reg'];
  $phone=$_POST['phone'];

  $sql = "INSERT INTO students (fname,lname,roll,reg,email,username,password,phone)
   VALUES ('$fname','$lname','$roll','$reg','$email','$username',' $password','$phone')";
  
  if(mysqli_query($con, $sql)){
      echo "Records inserted successfully.";
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
  }
  mysqli_close($con);
  // Close connection
}



//   $result=mysqli_query($con,query:
//   "INSERT INTO 'students'('fname','lname','roll','reg','email','username','password','phone')
// VALUES('$fname','$lname','$email','$username',' $password','$roll','$reg','$phone')" 
// );


?>


<!doctype html>
<html lang="en" class="fixed accounts sign-in">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Student Registration</title>
   
    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="../assests/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assests/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../assests/vendor/animate.css/animate.css">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="../assests/stylesheets/css/style.css">
</head>

<body>
    <div class="img">
<div class="wrap">
    <!-- page BODY -->
    <!-- ========================================================= -->
    <div class="page-body animated slideInDown">
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--LOGO-->
        <div class="logo">
            <!-- <img alt="logo" src="images/logo-dark.png" /> -->
          
        </div>
        <div class="box">
            <!--SIGN IN FORM-->
            <div class="panel mb-none">
                <div class="panel-content bg-scale-0">
                    <form method="post" action"<?=$_SERVER['PHP_SELF'] ?>">
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control"  placeholder="First Name" name="fname">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control"  placeholder="Last Name" name="lname">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control"  placeholder="Username" name="username">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="email" class="form-control"  placeholder="Email" name="email">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="password" class="form-control"  placeholder="Password" name="password">
                                <i class="fa fa-key"></i>
                            </span>
                        </div>
                       
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="number" class="form-control"  placeholder="RollNumber" name="roll" pattern=[0-9]{6}>
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="number" class="form-control"  placeholder="RegNO" name="reg" pattern="[0-9]{6}">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="number" class="form-control"  placeholder="01*********" name="phone" pattern="01[5|6|7|8|9][0-9]{8}">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        <div class="form-group">
                           <input class="btn btn-primary btn-block"type="submit" name="student_register" value="Register">
                        </div>
                        <div class="form-group text-center">
                            Have an account?, <a href="sign-in.php">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    </div>
</div>
    </div>
<!--BASIC scripts-->
<!-- ========================================================= -->
<script src="../assest/vendor/jquery/jquery-1.12.3.min.js"></script>
<script src="../assest/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../assest/vendor/nano-scroller/nano-scroller.js"></script>
<!--TEMPLATE scripts-->
<!-- ========================================================= -->
<script src="../assest/javascripts/template-script.min.js"></script>
<script src="../assest/javascripts/template-init.min.js"></script>
<!-- SECTION script and examples-->
<!-- ========================================================= -->
</body>



</html>
