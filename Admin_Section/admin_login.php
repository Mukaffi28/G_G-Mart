<?php

session_start();

include("Assets\Includes\db.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7
.0/css/font-awesome.min.css">

<link rel="stylesheet" href="Assets\CSS\Admin_Login_stylesheet.css">

    <title>Admin Login Form</title>
</head>
<body style="background-image: linear-gradient(to bottom right, #000428 , #004e92);">
    <div class="container">
        <h2 style="text-align: center; margin:10px;">Admin Section</h2>
        <form class="login-email" action="" method="post">
            <p class="login-text">Login with email</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="admin_email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="admin_pass" required>
            </div>
            <div class="input-group">
            <a href="#" style="margin:15px;"><i>Forgot Password?</i></a>
            </div>
            <div class="input-group">
                <button class="btn" type="submit" name="admin_login">Login</button>
            </div>
        </form>
    </div>

    <!-- login Backend -->
    <?php
    
        if(isset($_POST['admin_login'])){
            $admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);
            $admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);
            $get_admin = "select * from admin where Email='$admin_email' AND Password='$admin_pass'";
            $run_admin = mysqli_query($con,$get_admin);
            $count = mysqli_num_rows($run_admin);
            if($count==1){
            $_SESSION['admin_email']=$admin_email;
            echo "<script>alert('You are Logged in into admin panel')</script>";
            echo "<script>window.open('index.php?dashboard','_self')</script>";
            }
            else {
            echo "<script>alert('Email or Password is Wrong')</script>";
            }

        }

    ?>
 
    
</body>
</html>






<!---
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7
.0/css/font-awesome.min.css">
    <link href="Assets\css\style.css" rel="stylesheet" type="text/css">
    <title>Admin-login</title>
</head>
<body>




<div class="container">
        <p class="login-text">Login with social media</p>
        <div class="login-social">
            <a href="#" class="facebook"><i class="fa fa-facebook"></i> Facebook</a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i> Twitter</a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i> Google
 Plus</a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i> Linkedin</a>
        </div>
        <form class="login-email">
            <p class="login-text">Login with email</p>
            <div class="input-group">
                <input type="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <button class="btn">Login</button>
            </div>
        </form>
    </div>

    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="Assets\Images\admin-bg.png" calss="img-fluid" alt="">
                </div>
                <div class="col-lg-7">
                    <form>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" placeholder="Email-Address" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="*****" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="button" class="BtnLogin">LogIn</button>
                            </div>
                        </div>
                        <a href="#">Forgot Password</a>
                        <p>Don't Have an account?<a href="#">Register</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
-->