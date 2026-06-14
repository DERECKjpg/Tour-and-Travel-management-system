<?php

include 'db.php';

$id = $_GET['id'];
$status = $_GET['status'];

mysqli_query(
$conn,
"UPDATE bookings
SET booking_status='$status'
WHERE id='$id'"
);

header(
"Location: admin_bookings.php"
);
exit();

?>