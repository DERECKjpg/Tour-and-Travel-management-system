<?php

session_start();

if(!isset($_SESSION['user_id']))
{
    header("Location: login_register.php");
    exit();
}

include 'db.php';

$email = $_SESSION['email'];

$result = mysqli_query(
$conn,
"SELECT * FROM bookings
WHERE email='$email'
ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html>
<head>

<title>My Bookings</title>

<style>

body{
font-family:Arial;
background:#f5f7fa;
padding:30px;
}

h1{
margin-bottom:20px;
}

.booking-card{

background:white;

padding:20px;

margin-bottom:20px;

border-radius:12px;

box-shadow:0 2px 10px rgba(0,0,0,.1);
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

</style>

</head>

<body>

<h1>
My Bookings
</h1>

<?php

while($row=mysqli_fetch_assoc($result))
{
?>

<div class="booking-card">

<h2>
<?php echo $row['package_name']; ?>
</h2>

<p>
<strong>Travel Date:</strong>
<?php echo $row['travel_date']; ?>
</p>

<p>
<strong>Persons:</strong>
<?php echo $row['persons']; ?>
</p>

<p>
<strong>Status:</strong>

<span class="<?php echo strtolower($row['booking_status']); ?>">

<?php echo $row['booking_status']; ?>

</span>

</p>

</div>

<?php
}
?>

</body>
</html>