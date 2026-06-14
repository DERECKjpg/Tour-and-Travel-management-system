```php
<?php

session_start();
include 'db.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $package_name = $_POST['package_name'];
    $customer_name = $_POST['customer_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $persons = $_POST['persons'];
    $travel_date = $_POST['travel_date'];

    $hotel_type = $_POST['hotel_type'];
    $transport_type = $_POST['transport_type'];

    $activities = "";

    if(isset($_POST['activities']))
    {
        $activities = implode(", ", $_POST['activities']);
    }

    /* Package Price */

    $total = 8000;

    if($package_name == "Goa Package")
    {
        $total = 8000;
    }
    elseif($package_name == "Manali Package")
    {
        $total = 12000;
    }
    elseif($package_name == "Kerala Package")
    {
        $total = 15000;
    }
    elseif($package_name == "Kashmir Package")
    {
        $total = 18000;
    }

    /* Hotel Price */

    if($hotel_type == "Deluxe")
    {
        $total += 2000;
    }
    elseif($hotel_type == "Luxury")
    {
        $total += 5000;
    }

    /* Transport Price */

    if($transport_type == "Flight")
    {
        $total += 4000;
    }
    elseif($transport_type == "Train")
    {
        $total += 1000;
    }

    /* Activities Price */

    if(strpos($activities,"Scuba Diving") !== false)
    {
        $total += 1500;
    }

    if(strpos($activities,"River Rafting") !== false)
    {
        $total += 1200;
    }

    if(strpos($activities,"Trekking") !== false)
    {
        $total += 800;
    }

    if(strpos($activities,"Bungee Jumping") !== false)
    {
        $total += 2500;
    }

    $sql = "INSERT INTO bookings
    (
        package_name,
        customer_name,
        email,
        phone,
        persons,
        travel_date,
        hotel_type,
        transport_type,
        activities
    )
    VALUES
    (
        '$package_name',
        '$customer_name',
        '$email',
        '$phone',
        '$persons',
        '$travel_date',
        '$hotel_type',
        '$transport_type',
        '$activities'
    )";

    if(mysqli_query($conn,$sql))
    {
        $booking_id = mysqli_insert_id($conn);

        $_SESSION['booking_data'] = array(

            'booking_id' => $booking_id,
            'package' => $package_name,
            'customer' => $customer_name,
            'email' => $email,
            'phone' => $phone,
            'persons' => $persons,
            'hotel' => $hotel_type,
            'transport' => $transport_type,
            'activities' => $activities,
            'travel_date' => $travel_date,
            'total' => $total

        );

        header("Location: confirmation.php");
        exit();
    }
    else
    {
        echo "Error : " . mysqli_error($conn);
    }
}

mysqli_close($conn);

?>
```
