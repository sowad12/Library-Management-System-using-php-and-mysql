<?php
require_once ('../db.php');
session_start();
if(isset($_SESSION['libraian_login'])){
    header('location:index.php');
}

if(isset($_POST['login'])){
 
$email=$_POST['email'];
$password=$_POST['password'];
$sql = "select * from libraian where email='$email';";
$result=mysqli_query($con, $sql);

 if(mysqli_query($con, $sql)){
     echo "Records inserted successfully.";
     $result=mysqli_query($con, $sql);
     if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_assoc($result);
        //print_r($row);
        if($password==$row['password']){
            echo "Success";
             $_SESSION['libraian_login']=$email;
            header('location:index.php');
        }
        else{
           $error="Invalid password"; 
        }
     }
     else{
         $error="Email invalid";
     }
    
    
 } else{
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
 }
 mysqli_close($con);
}

?>


<!doctype html>
<html lang="en" class="fixed accounts sign-in">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>LMS</title>
 
    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="login.css">
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
            
            <?php
                  if(isset($error)){
               ?>
           
               <div class="alert alert-danger" role="alert">
                      <?=$error?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true"></span>
                      </button>
                  </div>
                    <?php
                  }
                    ?>  


        </div> 
        <div class="box">
            
            <!--SIGN IN FORM-->
            <div class="panel mb-none">
                <div class="panel-content bg-scale-0">
                 <form method="post" action"<?=$_SERVER['PHP_SELF'] ?>">
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                <i class="fa fa-key"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" id="remember-me" value="option1" checked>
                                <label class="check" for="remember-me">Remember me</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="LOG IN" class="btn btn-primary btn-block" name="login">
                           
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
<script src="vendor/jquery/jquery-1.12.3.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/nano-scroller/nano-scroller.js"></script>
<!--TEMPLATE scripts-->
<!-- ========================================================= -->
<script src="javascripts/template-script.min.js"></script>
<script src="javascripts/template-init.min.js"></script>
<!-- SECTION script and examples-->
<!-- ========================================================= -->
</body>



</html>
