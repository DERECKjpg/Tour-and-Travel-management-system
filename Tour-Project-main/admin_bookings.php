<?php

session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: admin_login.php");
    exit();
}

include 'db.php';

$result = mysqli_query(
$conn,
"SELECT * FROM bookings ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html>
<head>

<title>Manage Bookings</title>

<style>

body{
font-family:Arial;
background:#f5f7fa;
padding:20px;
}

table{
width:100%;
border-collapse:collapse;
background:white;
}

th,td{
padding:12px;
border:1px solid #ddd;
text-align:center;
}

th{
background:#0F4C81;
color:white;
}

.approve{
background:#00B894;
color:white;
padding:8px 12px;
text-decoration:none;
border-radius:5px;
}

.reject{
background:#e74c3c;
color:white;
padding:8px 12px;
text-decoration:none;
border-radius:5px;
}

</style>

</head>

<body>

<h1>Manage Bookings</h1>

<table>

<tr>

<th>ID</th>
<th>Package</th>
<th>Customer</th>
<th>Email</th>
<th>Travel Date</th>
<th>Status</th>
<th>Action</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['package_name']; ?></td>

<td><?php echo $row['customer_name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['travel_date']; ?></td>

<td><?php echo $row['booking_status']; ?></td>

<td>

<a class="approve"
href="update_booking.php?id=<?php echo $row['id']; ?>&status=Approved">
Approve
</a>

<a class="reject"
href="update_booking.php?id=<?php echo $row['id']; ?>&status=Rejected">
Reject
</a>

</td>

</tr>

<?php
}
?>

</table>

</body>
</html>