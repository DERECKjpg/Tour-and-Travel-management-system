```php
<?php

session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: admin_login.php");
    exit();
}

include 'db.php';

$totalUsers = mysqli_fetch_assoc(
mysqli_query($conn,
"SELECT COUNT(*) AS total FROM users")
)['total'];

$totalBookings = mysqli_fetch_assoc(
mysqli_query($conn,
"SELECT COUNT(*) AS total FROM bookings")
)['total'];

$totalContacts = mysqli_fetch_assoc(
mysqli_query($conn,
"SELECT COUNT(*) AS total FROM contact")
)['total'];

?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Information</title>

<style>

body{
font-family:Arial;
background:#f4f6f9;
padding:30px;
}

.container{
max-width:1000px;
margin:auto;
}

.card{
background:white;
padding:25px;
margin-bottom:20px;
border-radius:12px;
box-shadow:0 2px 10px rgba(0,0,0,.1);
}

h1{
color:#0F4C81;
}

.stat{
font-size:30px;
font-weight:bold;
color:#00B894;
}

</style>

</head>

<body>

<div class="container">

<h1>Admin Information</h1>

<div class="card">
<h2>Total Users</h2>
<div class="stat"><?php echo $totalUsers; ?></div>
</div>

<div class="card">
<h2>Total Bookings</h2>
<div class="stat"><?php echo $totalBookings; ?></div>
</div>

<div class="card">
<h2>Total Contact Messages</h2>
<div class="stat"><?php echo $totalContacts; ?></div>
</div>

</div>

</body>
</html>
```
