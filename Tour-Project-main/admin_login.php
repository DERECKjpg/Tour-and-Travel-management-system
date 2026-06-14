<!DOCTYPE html>
<html>
<head>

<title>Admin Login</title>

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

background:linear-gradient(
135deg,
#0F4C81,
#00B894
);
}

.login-box{

width:400px;

background:white;

padding:40px;

border-radius:20px;

box-shadow:0 10px 30px rgba(0,0,0,.2);
}

.login-box h1{
text-align:center;
margin-bottom:10px;
color:#0F4C81;
}

.login-box p{
text-align:center;
margin-bottom:25px;
color:gray;
}

input{

width:100%;

padding:12px;

margin:10px 0;

border:1px solid #ddd;

border-radius:8px;
}

button{

width:100%;

padding:12px;

background:#00B894;

color:white;

border:none;

border-radius:8px;

cursor:pointer;

font-size:16px;
}

button:hover{
background:#009c7f;
}

</style>

</head>

<body>

<div class="login-box">

<h1>Admin Panel</h1>

<p>Tour Management System</p>

<form action="admin_login_process.php" method="POST">

<input
type="text"
name="username"
placeholder="Username"
required>

<input
type="password"
name="password"
placeholder="Password"
required>

<button type="submit">
Login
</button>

</form>

</div>

</body>
</html>