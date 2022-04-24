<?php

    include "connect.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
</head>
<body>
<div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <img class="logo" src="logo.png" alt="we_connect_logo" height=70px width=150px>

            <!-- user input for log in-->
            <form  id="login" class="input-group" method ="POST">
                <input type="text" id="user_id" name="user_id" class="input-field" placeholder="User Id" required>
                <input type="password" id = "user_password" name="user_password" class="input-field" placeholder="Enter Password" required>
                <!--<div><input type="checkbox" class="checkbox"><span> Remember Password</span></div>-->
                <button type="submit" name = "submit" class="submit-btn">Log in</button>
    
            </form>

            <!-- user input for registeration -->
    
            <form id="register" class="input-group" method = "POST">    
                <input type="text" name="first_name" id="first_name" class="input-field" placeholder="first name" required>
                <input type="text" name="last_name" id="last_name" class="input-field" placeholder="last name" required>
                <input type="text" name = "user_name" id="user_name" class="input-field" placeholder="User Name" required>
                <input type="email" name ="email" id="email" class="input-field" placeholder="Email" required>
                <input type="password" name="password" id="password" class="input-field" placeholder="Enter Password" required>
                <!--<div><input type="checkbox" class="checkbox"><span> Remember Password</span></div>-->
                <button type="submit" name="submit_btn" class="submit-btn">Register As Employer</button>
                <button type="submit" name="submit_btn1" class="submit-btn">Register As Job Seeker</button>
                

            </form>  
        </div>
        
        
           
</div>

<script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");

    function register(){
        x.style.left = "-400px";
        y.style.left = "10px";
        z.style.left = "110px";
    }

    function login(){
        x.style.left = "10px";
        y.style.left = "450px";
        z.style.left = "0px";
    }
</script>





</body>
</html>