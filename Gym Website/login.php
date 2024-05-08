<?php
session_start();

// Check if the user is already authenticated, redirect to about.php
if (isset($_SESSION['username'])) {
    header("Location: about.php");
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

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;

            // Store login information in the database
            $login_time = date("Y-m-d H:i:s");
            $login_person_name = $row['name']; // Assuming the name is stored in the 'name' column, update it accordingly

            $insert_login_info_sql = "INSERT INTO login_info (username, login_time) VALUES ('$username', '$login_time')";
            $conn->query($insert_login_info_sql);

            header("Location: about.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
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

    <!-- main content -->
    <div class="row">
        <div class="col-xl-6 col-lg-6"></div>
        <div class="col-xl-6 col-lg-6"> 
            <section>
                <div class="login-box">
                    <form action="#" method="post">
                        <h2>Login</h2>
                        <div class="input-box">
                            <input type="text" name="username" required>
                            <label>User Name</label>
                        </div>
                        <div class="input-box">
                            <input type="password" name="password" required>
                            <label>Password</label>
                        </div>
                        <div class="btn-login">
                            <button type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>

