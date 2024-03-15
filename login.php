<?php
require_once('database.php');
session_start(); 
$_SESSION['status'] = ""; 
if ($_SESSION['status']=="login") {
    header("location:home.php");
}else{
    if (isset($_POST['submit'])) { 
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (Login($_POST['username'], $_POST['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['status'] = "login"; 
            if ($_SESSION['role']=="admin") {  
                header("location:home.php");
            }else{
                header("location:member.php"); 
            }
        } else {
            header("location:login.php?msg=gagal"); 
        }
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
  <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-transparent mb-0">
                            <h5 class="text-center"><span class="font-weight-bold text-primary">LOGIN</span></h5>
                        </div>
                        <div class="card-body">
        <form action="" method="post">
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-primary btn-block">
        </form>
                </div>
             </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>