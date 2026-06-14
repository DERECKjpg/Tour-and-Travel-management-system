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

<title>Booking Confirmed</title>

<style>

body{
font-family:Arial;
background:#f4f6f9;
padding:40px;
}

.box{
max-width:700px;
margin:auto;
background:white;
padding:30px;
border-radius:15px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
}

h1{
color:green;
text-align:center;
}

.row{
margin:12px 0;
font-size:18px;
}

.total{
font-size:28px;
font-weight:bold;
color:#0F4C81;
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
margin-right:10px;
}

</style>

</head>

<body>

<div class="box">

<h1>✅ Booking Confirmed</h1>

<div class="row">
<b>Booking ID:</b>
<?php echo $data['booking_id']; ?>
</div>

<div class="row">
<b>Package:</b>
<?php echo $data['package']; ?>
</div>

<div class="row">
<b>Customer:</b>
<?php echo $data['customer']; ?>
</div>

<div class="row">
<b>Hotel:</b>
<?php echo $data['hotel']; ?>
</div>

<div class="row">
<b>Transport:</b>
<?php echo $data['transport']; ?>
</div>

<div class="row">
<b>Activities:</b>
<?php echo $data['activities']; ?>
</div>

<div class="row">
<b>Travel Date:</b>
<?php echo $data['travel_date']; ?>
</div>

<div class="row">
<b>Status:</b>
Pending
</div>

<div class="total">
Total Amount: ₹<?php echo $data['total']; ?>
</div>

<a href="user_dashboard.php" class="btn">
Dashboard
</a>
<a href="receipt.php" class="btn">
Download Receipt
</a>
<a href="index.php" class="btn">
Home
</a>
<a href="#" onclick="window.print()" class="btn">
Print Receipt
</a>

</div>

</body>
</html>
```
