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

$messageSquats = ""; // Variable to store the success or error message for squats equipment

if (isset($_POST['addSquats'])) {
    $pkgtitleSquats = $_POST['titleSquats'];
    $pkgdecSquats = $_POST['descriptionSquats'];
    $pkg_img1Squats = $_FILES['imageSquats']['name'];
    $temp_img1Squats = $_FILES['imageSquats']['tmp_name'];

    move_uploaded_file($temp_img1Squats, "../data/images/$pkg_img1Squats");

    $qrySquats = "INSERT INTO equipmentsquats_content (title, description, image_path) VALUES ('$pkgtitleSquats', '$pkgdecSquats', '$pkg_img1Squats')";

    if (mysqli_query($con, $qrySquats)) {
        $messageSquats = "Image saved!!!";
    } else {
        $messageSquats = "Try again!!!";
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
        <div class="equipment-squats-main">
            <div class="equipment-container">
                <?php
                if (!empty($messageSquats)) {
                    echo "<p class='message'>$messageSquats</p>";
                }
                ?>
                <!-- Equipment input form for 'Squats' section -->
                <form class="equipment-form" action="" method="post" enctype="multipart/form-data">
                    <label for="titleSquats">Equipment Title:</label>
                    <input type="text" name="titleSquats" required>
                    <label for="descriptionSquats">Equipment Description:</label>
                    <textarea name="descriptionSquats" required></textarea>
                    <label for="imageSquats">Upload Image:</label>
                    <input type="file" name="imageSquats" accept="image/*" required>
                    <input type="submit" name="addSquats" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
