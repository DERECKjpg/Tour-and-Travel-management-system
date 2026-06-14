<?php
session_start();

include 'db.php';

if(!isset($_SESSION['fullname']))
{
    header("Location: login_register.php");
    exit();
}

$fullname = $_SESSION['fullname'];
$email = $_SESSION['email'];

$result = mysqli_query(
$conn,
"SELECT * FROM bookings
WHERE email='$email'
ORDER BY id DESC"
);

$total_bookings = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>

<head>

<title>User Dashboard</title>

<style>

body{
font-family:Arial;
background:#f4f6f9;
margin:0;
padding:0;
}

.header{
background:#0F4C81;
color:white;
padding:20px;
text-align:center;
}

.container{
width:90%;
margin:30px auto;
}

.card{
background:white;
padding:20px;
border-radius:12px;
box-shadow:0 2px 10px rgba(0,0,0,.1);
margin-bottom:20px;
}

h2{
margin:0;
}

table{
width:100%;
border-collapse:collapse;
background:white;
}

table th{
background:#0F4C81;
color:white;
padding:12px;
}

table td{
padding:12px;
border:1px solid #ddd;
text-align:center;
}

.pending{
color:orange;
font-weight:bold;
}

.approved{
color:green;
font-weight:bold;
}

.rejected{
color:red;
font-weight:bold;
}

.btn{
display:inline-block;
padding:10px 20px;
background:#00B894;
color:white;
text-decoration:none;
border-radius:8px;
margin-top:15px;
}

.logout{
background:red;
}

</style>

</head>

<body>

<div class="header">

<h1>Welcome <?php echo $fullname; ?></h1>

</div>

<div class="container">

<div class="card">

<h2>Total Bookings: <?php echo $total_bookings; ?></h2>

<a href="index.php" class="btn">
Book New Tour
</a>

<a href="logout.php" class="btn logout">
Logout
</a>

</div>

<div class="card">

<h2>My Bookings</h2>

<br>

<table>

<tr>
<th>ID</th>
<th>Package</th>
<th>Travel Date</th>
<th>Hotel</th>
<th>Transport</th>
<th>Status</th>
</tr>

<?php

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['package_name']; ?></td>

<td><?php echo $row['travel_date']; ?></td>

<td><?php echo $row['hotel_type']; ?></td>

<td><?php echo $row['transport_type']; ?></td>

<td class="<?php echo strtolower($row['booking_status']); ?>">
<?php echo $row['booking_status']; ?>
</td>

</tr>

<?php
}
?>

</table>

</div>

</div>

</body>

</html>