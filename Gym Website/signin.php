<?php
session_start();

// Check if the user is already authenticated, redirect to login.php
if (isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gym_database"; // Update with your actual database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $newUsername = $_POST['username'];
    $newPassword = $_POST['password'];

    // Basic validation
    if (empty($firstname) || empty($lastname) || empty($newUsername) || empty($newPassword)) {
        echo "All fields are required.";
    } else {
        // You should hash passwords for security
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (firstname, lastname, username, password) VALUES ('$firstname', '$lastname', '$newUsername', '$hashedPassword')";

        if ($conn->query($sql) === TRUE) {
            // Registration successful, redirect to login.php
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>GYM</title>
    <link rel="icon" href="data\images\logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="data/css/style1.css" rel="Stylesheet">
</head>
<body>

<!-- navbar section -->
<div class="logoo">
    <nav>
        <div class="logo1">
            <a href="Home.php">
                <img src="data\images\logo.png">
            </a>
        </div>
    </nav>

    <!-- mainsection -->
    <div class="row">
        <div class="col-xl-6 col-lg-6"></div>
        <div class="col-xl-6 col-lg-6">
            <section>
                <div class="login-box1">
                    <form action="#" method="post">
                        <h2>SIGN UP</h2>
                        <div class="input-box">
                            <input type="text" name="firstname" required>
                            <label>First name</label>
                        </div>
                        <div class="input-box">
                            <input type="text" name="lastname" required>
                            <label>Last name</label>
                        </div>
                        <div class="input-box">
                            <input type="text" name="username" required>
                            <label>UserName</label>
                        </div>
                        <div class="input-box">
                            <input type="password" name="password" required>
                            <label>Set Password</label>
                        </div>
                        <button type="submit" class="b1">Register</button>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>

