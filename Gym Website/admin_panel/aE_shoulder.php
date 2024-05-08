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

$messageShoulder = ""; // Variable to store the success or error message for shoulder equipment

if (isset($_POST['addShoulder'])) {
    $pkgtitleShoulder = $_POST['titleShoulder'];
    $pkgdecShoulder = $_POST['descriptionShoulder'];
    $pkg_img1Shoulder = $_FILES['imageShoulder']['name'];
    $temp_img1Shoulder = $_FILES['imageShoulder']['tmp_name'];

    move_uploaded_file($temp_img1Shoulder, "../data/images/$pkg_img1Shoulder");

    $qryShoulder = "INSERT INTO equipmentshoulder_content (title, description, image_path) VALUES ('$pkgtitleShoulder', '$pkgdecShoulder', '$pkg_img1Shoulder')";

    if (mysqli_query($con, $qryShoulder)) {
        $messageShoulder = "Image saved!!!";
    } else {
        $messageShoulder = "Try again!!!";
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
        <div class="equipment-shoulder-main">
            <div class="equipment-container">
                <?php
                if (!empty($messageShoulder)) {
                    echo "<p class='message'>$messageShoulder</p>";
                }
                ?>
                <!-- Equipment input form for 'Shoulder' section -->
                <form class="equipment-form" action="" method="post" enctype="multipart/form-data">
                    <label for="titleShoulder">Equipment Title:</label>
                    <input type="text" name="titleShoulder" required>
                    <label for="descriptionShoulder">Equipment Description:</label>
                    <textarea name="descriptionShoulder" required></textarea>
                    <label for="imageShoulder">Upload Image:</label>
                    <input type="file" name="imageShoulder" accept="image/*" required>
                    <input type="submit" name="addShoulder" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
