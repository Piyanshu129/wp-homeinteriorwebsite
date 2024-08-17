<?php

//header file is included here
include 'inc/header.php';

//user file is included here
include 'lib/user.php';
$user = new user;


//if user logged in redirect user to index page
session::userLogin();

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $userLog = $user->userLogin($_POST);
}

?>

<!-- body area started form here -->
<div class="main_img1" style="background-image: url(Picture3.jpg);">
<div class="container w-50 mt-5">
    <div class="card">
        <div class="card-header bg-dark">
            <h5 class="text-white">Login to your account</h5>
        </div>
        <div class="card-body">
<?php

if(isset($userLog)){
    echo $userLog;
}

?>

<div class="container2">
        <div class="box">
        <div class="box-login" id="login">
            <div class="top-header">
                <h3>Hello, Again!</h3>
                <small>We are happy to have you back.</small>
            </div>
            <form action=" " method="POST">
            <div class="input-group">
                <div class="input-field">
                    <input type="text" name="username" class="input-box" id="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-field">
                    <input type="password" name="password" class="input-box" id="password" required>
                    <label for="password">Password</label>
                    <div class="eye-area">
                    <div  class="eye-box" onclick="myLogPassword()">
                        <i class="fa-regular fa-eye" id="eye"></i>
                        <i class="fa-regular fa-eye-slash" id="eye-slash"></i>
                    </div>
                </div>
                </div>
                <div class="remember">
                    <input type="checkbox" id="formCheck" class="check">
                    <label for="formCheck">Remember Me</label>
                </div>
                <div class="input-field">
                    <input type="submit" class="input-submit" name="submit" value="Sign In" required>
                </div>
                
                
            </div>
         </div>
        </form>
        <div class="switch">
            <a href="login.php" class="login active" onclick="login()">Login</a>
            <a href="registration.php" class="register" onclick="register()">Register</a>
            <div class="btn-active" id="btn"></div>
        </div>
        </div>
     </div>
</div>
</div>


<script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');

        function login(){
            x.style.left = "27px";
            y.style.right = "-350px";
            z.style.left = "0px";
        }
        function register(){
            x.style.left = "-350px";
            y.style.right = "25px";
            z.style.left = "150px";
        }


   // View Password codes

         
      
        function myLogPassword(){

         var a = document.getElementById("logPassword");
         var b = document.getElementById("eye");
         var c = document.getElementById("eye-slash");

         if(a.type === "password"){
            a.type = "text";
            b.style.opacity = "0";
            c.style.opacity = "1";
         }else{
            a.type = "password";
            b.style.opacity = "1";
            c.style.opacity = "0";
         }

        }

        function myRegPassword(){
    
         var d = document.getElementById("regPassword");
         var b = document.getElementById("eye-2");
         var c = document.getElementById("eye-slash-2");
 
         if(d.type === "password"){
            d.type = "text";
            b.style.opacity = "0";
            c.style.opacity = "1";
         }else{
            d.type = "password";
            b.style.opacity = "1";
            c.style.opacity = "0";
         }

        }
     </script>

