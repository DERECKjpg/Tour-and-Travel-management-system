```php
<?php
session_start();

$package = $_GET['package'] ?? '';

$basePrice = 8000;

if($package == "Goa Package")
{
    $basePrice = 8000;
}
elseif($package == "Manali Package")
{
    $basePrice = 12000;
}
elseif($package == "Kerala Package")
{
    $basePrice = 15000;
}
elseif($package == "Kashmir Package")
{
    $basePrice = 18000;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Book Tour</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#f5f7fa;
padding:30px;
}

.container{
max-width:1000px;
margin:auto;
background:white;
padding:30px;
border-radius:15px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
}

h1{
text-align:center;
margin-bottom:20px;
color:#0F4C81;
}

.section{
margin-bottom:20px;
}

input[type=text],
input[type=email],
input[type=number],
input[type=date]{
width:100%;
padding:12px;
margin-top:8px;
border:1px solid #ddd;
border-radius:8px;
}

.cards{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
gap:15px;
margin-top:15px;
}

.card{
background:white;
padding:20px;
border-radius:12px;
cursor:pointer;
box-shadow:0 2px 10px rgba(0,0,0,.1);
transition:.3s;
text-align:center;
}

.card:hover{
transform:translateY(-5px);
}

.price-box{
background:#0F4C81;
color:white;
padding:20px;
border-radius:10px;
margin-top:20px;
text-align:center;
}

button{
width:100%;
padding:15px;
background:#00B894;
color:white;
border:none;
border-radius:8px;
font-size:18px;
cursor:pointer;
margin-top:20px;
}

button:hover{
background:#009c7f;
}

</style>
</head>

<body>

<div class="container">

<h1>✈ Tour Booking Form</h1>

<form action="book_tour.php" method="POST">

<div class="section">
<label>Package Name</label>
<input type="text"
name="package_name"
value="<?php echo $package; ?>"
readonly>
</div>

<div class="section">
<label>Customer Name</label>
<input type="text"
name="customer_name"
required>
</div>

<div class="section">
<label>Email</label>
<input type="email"
name="email"
required>
</div>

<div class="section">
<label>Phone</label>
<input type="text"
name="phone"
required>
</div>

<div class="section">
<label>Persons</label>
<input type="number"
name="persons"
required>
</div>

<div class="section">
<label>Travel Date</label>
<input type="date"
name="travel_date"
required>
</div>

<h3>Select Hotel</h3>

<div class="cards">

<label class="card">
<input type="radio"
name="hotel_type"
value="Standard"
required>
<h4>🏨 Standard</h4>
<p>₹0 Extra</p>
</label>

<label class="card">
<input type="radio"
name="hotel_type"
value="Deluxe">
<h4>🌟 Deluxe</h4>
<p>+₹2000</p>
</label>

<label class="card">
<input type="radio"
name="hotel_type"
value="Luxury">
<h4>👑 Luxury</h4>
<p>+₹5000</p>
</label>

</div>

<br>

<h3>Select Transport</h3>

<div class="cards">

<label class="card">
<input type="radio"
name="transport_type"
value="Flight"
required>
<h4>✈ Flight</h4>
<p>+₹4000</p>
</label>

<label class="card">
<input type="radio"
name="transport_type"
value="Train">
<h4>🚆 Train</h4>
<p>+₹1000</p>
</label>

<label class="card">
<input type="radio"
name="transport_type"
value="Bus">
<h4>🚌 Bus</h4>
<p>₹0</p>
</label>

</div>

<br>

<h3>Select Activities</h3>

<div class="cards">

<label class="card">
<input type="checkbox"
name="activities[]"
value="Scuba Diving">
🌊 Scuba Diving
<br><br>
₹1500
</label>

<label class="card">
<input type="checkbox"
name="activities[]"
value="River Rafting">
🚣 River Rafting
<br><br>
₹1200
</label>

<label class="card">
<input type="checkbox"
name="activities[]"
value="Trekking">
🥾 Trekking
<br><br>
₹800
</label>

<label class="card">
<input type="checkbox"
name="activities[]"
value="Bungee Jumping">
🪂 Bungee Jumping
<br><br>
₹2500
</label>

</div>

<div class="price-box">
<h3>Estimated Total</h3>
<h2>₹ <span id="price"><?php echo $basePrice; ?></span></h2>
</div>

<button type="submit">
Confirm Booking
</button>

</form>

</div>

<script>

let basePrice = <?php echo $basePrice; ?>;

function calculatePrice()
{
let total = basePrice;

let hotel =
document.querySelector(
'input[name="hotel_type"]:checked'
);

if(hotel)
{
if(hotel.value=="Deluxe") total += 2000;
if(hotel.value=="Luxury") total += 5000;
}

let transport =
document.querySelector(
'input[name="transport_type"]:checked'
);

if(transport)
{
if(transport.value=="Flight") total += 4000;
if(transport.value=="Train") total += 1000;
}

document.querySelectorAll(
'input[name="activities[]"]:checked'
).forEach(function(activity){

if(activity.value=="Scuba Diving") total += 1500;
if(activity.value=="River Rafting") total += 1200;
if(activity.value=="Trekking") total += 800;
if(activity.value=="Bungee Jumping") total += 2500;

});

document.getElementById("price").innerHTML = total;
}

document.querySelectorAll("input").forEach(function(input){
input.addEventListener("change", calculatePrice);
});

</script>

</body>
</html>
```
