<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if email already exists
    $check = mysqli_query(
        $conn,
        "SELECT * FROM users WHERE email='$email'"
    );

    if (mysqli_num_rows($check) > 0)
    {
        header("Location: index.php");
        exit();
    }

    $sql = "INSERT INTO users(fullname,email,password)
            VALUES('$fullname','$email','$password')";

    if (mysqli_query($conn, $sql))
    {
        header("Location: index.php");
        exit();
    }
    else
    {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);

?>