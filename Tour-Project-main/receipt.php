```php
<?php

session_start();

if(!isset($_SESSION['booking_data']))
{
    header("Location: index.php");
    exit();
}

$data = $_SESSION['booking_data'];

?>

<!DOCTYPE html>
<html>
<head>

<title>Booking Receipt</title>

<style>

body{
font-family:Courier New;
background:#f4f6f9;
padding:40px;
}

.receipt{
max-width:700px;
margin:auto;
background:white;
padding:30px;
border:2px solid black;
}

h1{
text-align:center;
}

.row{
margin:12px 0;
font-size:18px;
}

.total{
font-size:26px;
font-weight:bold;
margin-top:20px;
}

.btn{
display:inline-block;
padding:12px 25px;
background:#00B894;
color:white;
text-decoration:none;
border-radius:8px;
margin-top:20px;
}

</style>

</head>

<body>

<div class="receipt">

<h1>TOUR BOOKING RECEIPT</h1>

<hr>

<div class="row">
Booking ID:
<?php echo $data['booking_id']; ?>
</div>

<div class="row">
Customer:
<?php echo $data['customer']; ?>
</div>

<div class="row">
Email:
<?php echo $data['email']; ?>
</div>

<div class="row">
Package:
<?php echo $data['package']; ?>
</div>

<div class="row">
Travel Date:
<?php echo $data['travel_date']; ?>
</div>

<div class="row">
Hotel:
<?php echo $data['hotel']; ?>
</div>

<div class="row">
Transport:
<?php echo $data['transport']; ?>
</div>

<div class="row">
Activities:
<?php echo $data['activities']; ?>
</div>

<div class="row">
Status:
Pending
</div>

<div class="total">
Total Amount:
₹<?php echo $data['total']; ?>
</div>

<hr>

<a href="user_dashboard.php" class="btn">
Back To Dashboard
</a>

</div>

</body>
</html>
```
