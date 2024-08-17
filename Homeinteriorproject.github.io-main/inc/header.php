<?php

$filepath = realpath(dirname(__FILE__));
include_once $filepath.'/../lib/session.php';
session::init();



//logout mechanism is created here
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action'])){
    session::destroy();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Registration System - PHP and MySQL</title>
    <link rel="stylesheet" href="assets/css/styles1.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/why choose us.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/portfolio.css">
    <link rel="stylesheet" href="assets/css/loginpage.css">
    <link rel="stylesheet" href="assets/css/flip.css">
</head>
<body>

   <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Login Registration System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
<?php
$userlogin = session::get("login");
if($userlogin == true){ ?>
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="?action=logout">Logout</a>
        </li>
<?php }else{ ?>
        <li class="nav-item">
            <a class="nav-link" href="registration.php">Registration</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
        </li>
<?php } ?>
        </ul>
    </div>
    </nav>-->
    
