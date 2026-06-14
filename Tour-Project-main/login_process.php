<?php

session_start();

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1)
    {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password']))
        {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['email'] = $user['email'];

            header("Location: user_dashboard.php");
            exit();
        }
        else
        {
            echo "<h2>Invalid Password</h2>";
        }
    }
    else
    {
        echo "<h2>User Not Found</h2>";
    }
}

mysqli_close($conn);

?>