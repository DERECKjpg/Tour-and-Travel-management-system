<?php
session_start();
?>

<?php if(isset($_SESSION['user_id'])) { ?>

<div style="text-align:center;margin:20px;">
    <a href="user_dashboard.php"
       style="background:#0F4C81;color:white;padding:12px 25px;
       text-decoration:none;border-radius:8px;">
       Go To Dashboard
    </a>
</div>

<?php } ?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tour & Travel Login</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;

    background:
    linear-gradient(rgba(0,0,0,.4),
    rgba(0,0,0,.4)),
    url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e");

    background-size:cover;
    background-position:center;
}

.container{

    width:420px;

    backdrop-filter:blur(15px);

    background:rgba(255,255,255,0.12);

    border:1px solid rgba(255,255,255,0.3);

    border-radius:20px;

    padding:35px;

    color:white;

    box-shadow:0 8px 32px rgba(0,0,0,.3);
}

.logo{
    text-align:center;
    margin-bottom:20px;
}

.logo h1{
    font-size:32px;
}

.logo p{
    color:#ddd;
}

.tabs{
    display:flex;
    margin-bottom:20px;
}

.tabs button{

    flex:1;

    padding:12px;

    border:none;

    cursor:pointer;

    background:#ffffff20;

    color:white;

    font-size:16px;
}

.tabs button:hover{
    background:#ffffff40;
}

.form{
    display:none;
}

.active{
    display:block;
}

input{

    width:100%;

    padding:12px;

    margin:10px 0;

    border:none;

    border-radius:8px;

    outline:none;
}

.submit{

    width:100%;

    padding:12px;

    margin-top:10px;

    background:#00b894;

    color:white;

    border:none;

    border-radius:8px;

    font-size:16px;

    cursor:pointer;
}

.submit:hover{
    background:#00a383;
}

.footer{
    text-align:center;
    margin-top:15px;
    color:#ddd;
    font-size:14px;
}

</style>

<script>

function showForm(form)
{
    document.getElementById("login").style.display="none";
    document.getElementById("register").style.display="none";

    document.getElementById(form).style.display="block";
}

</script>

</head>

<body>

<div class="container">

<div class="logo">

<h1>✈ Tour & Travel</h1>

<p>Explore the world with us</p>

</div>

<div class="tabs">

<button onclick="showForm('login')">
Login
</button>

<button onclick="showForm('register')">
Register
</button>

</div>

<!-- LOGIN -->

<div id="login" style="display:block">

<form action="login_process.php" method="POST">

<input
type="email"
name="email"
placeholder="Email Address"
required>

<input
type="password"
name="password"
placeholder="Password"
required>

<button class="submit" type="submit">
Login
</button>

</form>

</div>

<!-- REGISTER -->

<div id="register" style="display:none">

<form action="register_process.php" method="POST">

<input
type="text"
name="fullname"
placeholder="Full Name"
required>

<input
type="email"
name="email"
placeholder="Email Address"
required>

<input
type="password"
name="password"
placeholder="Password"
required>

<button class="submit" type="submit">
Create Account
</button>

</form>

</div>

<div class="footer">

Your Journey Begins Here 🌍

</div>

</div>

</body>
</html>