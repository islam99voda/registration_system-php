<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >

    <title>Login System Using PHP</title>
  </head>
  <body>


<!--navebar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="show-data.php">Show Data</a>
                </li>
<!--show and hidden login and register--> 
                <?php if(!isset($_SESSION['user_name'])):?> <!--if you didnt found user-->
                <li class="nav-item"><!--show login and register-->
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                <?php else: ?><!--else: show logout-->
                <li class="nav-item">
                    <a class="nav-link" href="all_users.php">All users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Change_Password.php">Change Password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                <?php endif?>
            </ul>
        </div>
    </nav>
<!--navebar-->