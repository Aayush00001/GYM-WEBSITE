<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM feedback WHERE id = $id";
    $result = $conn->query($sql);

    if ($result) {
        // Redirect to feedback fetch page
        echo '<script>alert("Record deleted successfully.");</script>';
        echo '<script>window.location.href = "feedbackfetch.php";</script>';
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
