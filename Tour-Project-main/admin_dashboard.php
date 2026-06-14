<?php

session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: admin_login.php");
    exit();
}

include 'db.php';

/* Total Users */
$userQuery = mysqli_query(
$conn,
"SELECT COUNT(*) AS total FROM users"
);

$totalUsers = mysqli_fetch_assoc($userQuery)['total'];

/* Total Bookings */
$bookingQuery = mysqli_query(
$conn,
"SELECT COUNT(*) AS total FROM bookings"
);

$totalBookings = mysqli_fetch_assoc($bookingQuery)['total'];

/* Total Messages */
$contactQuery = mysqli_query(
$conn,
"SELECT COUNT(*) AS total FROM contact"
);

$totalContacts = mysqli_fetch_assoc($contactQuery)['total'];

?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Dashboard</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

body{
display:flex;
background:#f5f7fa;
}

/* Sidebar */

.sidebar{

width:250px;
height:100vh;

background:#0F4C81;

padding:20px;

color:white;

position:fixed;
left:0;
top:0;
}

.sidebar h2{
margin-bottom:30px;
}

.sidebar a{

display:block;

padding:12px;

margin:10px 0;

color:white;

text-decoration:none;

border-radius:8px;

transition:0.3s;
}

.sidebar a:hover{
background:#1d6aa8;
}

/* Main */

.main{

margin-left:250px;

padding:30px;

width:100%;
}

/* Header */

.header{

background:white;

padding:20px;

border-radius:15px;

box-shadow:0 2px 10px rgba(0,0,0,.1);
}

.header h1{
color:#0F4C81;
}

/* Cards */

.cards{

display:grid;

grid-template-columns:
repeat(auto-fit,minmax(250px,1fr));

gap:20px;

margin-top:25px;
}

.card{

background:white;

padding:25px;

border-radius:15px;

box-shadow:0 2px 10px rgba(0,0,0,.1);

text-align:center;

transition:.3s;
}

.card:hover{

transform:translateY(-5px);

box-shadow:0 10px 20px rgba(0,0,0,.15);
}

.card h3{

color:#555;

margin-bottom:15px;
}

.card h1{

color:#00B894;

font-size:40px;
}

/* Footer */

.footer{

margin-top:30px;

background:white;

padding:20px;

border-radius:15px;

box-shadow:0 2px 10px rgba(0,0,0,.1);
}

</style>

</head>

<body>

<!-- Sidebar -->

<div class="sidebar">

<h2>✈ Admin Panel</h2>

<a href="admin_dashboard.php">
🏠 Dashboard
</a>

<a href="admin_bookings.php">
📖 View Bookings
</a>

<a href="admin_contacts.php">
📩 Contact Messages
</a>

<a href="admin_logout.php">
🚪 Logout
</a>
<a href="admin_users.php">
👥 Manage Users
</a>

</div>

<!-- Main Content -->

<div class="main">

<div class="header">

<h1>Welcome Admin</h1>

<p>Tour Management System Dashboard</p>

</div>

<div class="cards">

<div class="card">

<h3>Total Users</h3>

<h1><?php echo $totalUsers; ?></h1>

</div>

<div class="card">

<h3>Total Bookings</h3>

<h1><?php echo $totalBookings; ?></h1>

</div>

<div class="card">

<h3>Contact Messages</h3>

<h1><?php echo $totalContacts; ?></h1>

</div>

</div>

<div class="footer">

<h3>System Overview</h3>

<br>

<p>
Manage users, bookings, contact requests and monitor activity from one place.
</p>

</div>

</div>

</body>
</html>