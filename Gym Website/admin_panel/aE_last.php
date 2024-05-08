<?php
// Establish database connection (replace with your connection details)
$host = "localhost";
$username = "root";
$password = "";
$database = "gym_database";

$con = mysqli_connect($host, $username, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$messageLast = ""; // Variable to store the success or error message for last equipment

if (isset($_POST['addLast'])) {
    $pkgtitleLast = $_POST['titleLast'];
    $pkgdecLast = $_POST['descriptionLast'];
    $pkg_img1Last = $_FILES['imageLast']['name'];
    $temp_img1Last = $_FILES['imageLast']['tmp_name'];

    move_uploaded_file($temp_img1Last, "../data/images/$pkg_img1Last");

    $qryLast = "INSERT INTO equipmentlast_content (title, description, image_path) VALUES ('$pkgtitleLast', '$pkgdecLast', '$pkg_img1Last')";

    if (mysqli_query($con, $qryLast)) {
        $messageLast = "Image saved!!!";
    } else {
        $messageLast = "Try again!!!";
    }
}

// Close the database connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../data/css/astyle.css">
</head>
<body style="background-color:#666666;">
    <?php include "adminHeader.php";?>
    <div id="wrapper">
        <?php include "sidebar.php";?>
        <div class="equipment-last-main">
            <div class="equipment-container">
                <?php
                if (!empty($messageLast)) {
                    echo "<p class='message'>$messageLast</p>";
                }
                ?>
                <!-- Equipment input form for 'Last' section -->
                <form class="equipment-form" action="" method="post" enctype="multipart/form-data">
                    <label for="titleLast">Equipment Title:</label>
                    <input type="text" name="titleLast" required>
                    <label for="descriptionLast">Equipment Description:</label>
                    <textarea name="descriptionLast" required></textarea>
                    <label for="imageLast">Upload Image:</label>
                    <input type="file" name="imageLast" accept="image/*" required>
                    <input type="submit" name="addLast" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
