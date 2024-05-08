<?php
// Database connection settings
$hostname = "localhost"; // Replace with your database host
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "gym_database"; // Replace with your database name

// Create a database connection
$con = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the 'admin_login' table exists; if not, create it
$sql = "CREATE TABLE IF NOT EXISTS admin_login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    admin_name VARCHAR(255) NOT NULL,
    admin_password VARCHAR(255) NOT NULL
)";

if (mysqli_query($con, $sql)) {
    echo "<br>";
} else {
    echo "Error creating table: " . mysqli_error($con) . "<br>";
}

// Insert a sample record into the table if it doesn't exist
$adminName = "AAYUSH01"; // Replace with the desired admin username
$adminPassword = "0001"; // Replace with the desired admin password (you should hash this in a production environment)

$checkQuery = "SELECT * FROM admin_login";
$result = mysqli_query($con, $checkQuery);

if (mysqli_num_rows($result) == 0) {
    $insertQuery = "INSERT INTO admin_login (admin_name, admin_password) VALUES ('$adminName', '$adminPassword')";

    if (mysqli_query($con, $insertQuery)) {
        echo "Record inserted successfully<br>";
    } else {
        echo "Error inserting record: " . mysqli_error($con) . "<br>";
    }
}

// ...

if(isset($_POST['login'])) {
    // Retrieve user input from the form
    $adminName = $_POST['adminName'];
    $adminPassword = $_POST['adminPassword'];
    
    // Query the database for user authentication
    $query = "SELECT * FROM admin_login WHERE admin_name = '$adminName' AND admin_password = '$adminPassword'";
    $result = mysqli_query($con, $query);
    
    if(mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['AdminLoginId'] = $adminName;
        header("location: index.php");
        exit; // Ensure script execution stops after redirection
    } else {
        echo "<script>alert('Invalid Password');</script>";
    }
}

// Close the database connection at the end of your script
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="../data/css/astyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
<div class="login-form">
    <h2>Login In Advance Admin Panel</h2>
    <form method="POST"> 
        <div class="input-field">
            <i class="bi bi-person-circle"></i>
            <input type="text" placeholder="Username" name="adminName">
        </div>
        <div class="input-field">
            <i class="bi bi-shield-lock"></i>
            <input type="password" placeholder="Password" name="adminPassword">
        </div>
        
        <button type="submit" name="login">Log In</button>
    </form>
</div>
</div>
</body>
</html>