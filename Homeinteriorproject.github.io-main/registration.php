<?php

//header file is included here
include 'inc/header.php';

//user file is included here
include 'lib/user.php';
$user = new user;



//if user logged in redirect user to index page
session::userLogin();



if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $userRegi = $user->userRegistration($_POST);
}

?>

<!-- body area started form here -->
<div class="main_img1" style="background-image: url(Picture3.jpg);">
<div class="container w-50 mt-5">
    <div class="card">
        <div class="card-header bg-dark">
            <h5 class="text-white">Create a new account</h5>
        </div>
        <div class="card-body">
<?php

if(isset($userRegi)){
    echo $userRegi;
}

?>
<!-- register-->
<div class="container2">
    <div class="box">
        <div class="box-register" id="register">
        <div class="top-header">
            <h3>Sign Up, Now!</h3>
            <small>We are happy to have you with us.</small>
        </div>
        <form action="" method="POST">
        <div class="input-group">
            <div class="input-field">
                <input type="text" class="input-box" id="regUsername" name="name" required>
                <label for="regUsername">Name</label>
            </div>
            <div class="input-field">
                <input type="text" class="input-box" id="regUsername" name="username" required>
                <label for="regUsername">Username</label>
            </div>
            <div class="input-field">
                <input type="text" class="input-box" id="regEmail" name="email" required>
                <label for="regEmail">Email address</label>
            </div>
            <div class="input-field">
                <input type="password" class="input-box" id="regPassword" name="password" required>
                <label for="regPassword">Password</label>
            <div class="eye-area">
            <div  class="eye-box" onclick="myRegPassword()">
                <i class="fa-regular fa-eye" id="eye-2"></i>
                <i class="fa-regular fa-eye-slash" id="eye-slash-2"></i>
            </div>
            </div>
            </div>
            <div class="remember">
                <input type="checkbox" id="formCheck2" class="check">
                <label for="formCheck2">Remember Me</label>
            </div>
            <div class="input-field">
                <input type="submit" name="submit" class="input-submit" value="Sign Up" required>
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




        <!--   <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" id="cpassword">
                </div>
                <div class="form-check">
                    <input type="checkbox" name="terms" class="form-check-input" id="terms">
                    <label class="form-check-label" for="terms">I agree with terms and conditions</label>
                </div>
                <button type="submit" name="submit" class="btn btn-sm btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>-->