<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact(Name, Email, Phone, Subject, Message)
            VALUES ('$name', '$email', '$phone', '$subject', '$message')";

    if (mysqli_query($conn, $sql)) {

        echo "<h1>Data Inserted Successfully!</h1>";

    } else {

        echo "SQL Error: " . mysqli_error($conn);

    }
}

mysqli_close($conn);

?>