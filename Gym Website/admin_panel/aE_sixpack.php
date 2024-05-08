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

$messageSixPack = ""; // Variable to store the success or error message for six-pack equipment

if (isset($_POST['addSixPack'])) {
    $pkgtitleSixPack = $_POST['titleSixPack'];
    $pkgdecSixPack = $_POST['descriptionSixPack'];
    $pkg_img1SixPack = $_FILES['imageSixPack']['name'];
    $temp_img1SixPack = $_FILES['imageSixPack']['tmp_name'];

    move_uploaded_file($temp_img1SixPack, "../data/images/$pkg_img1SixPack");

    $qrySixPack = "INSERT INTO equipmentsixpack_content (title, description, image_path) VALUES ('$pkgtitleSixPack', '$pkgdecSixPack', '$pkg_img1SixPack')";

    if (mysqli_query($con, $qrySixPack)) {
        $messageSixPack = "Image saved!!!";
    } else {
        $messageSixPack = "Try again!!!";
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
        <div class="equipment-sixpack-main">
            <div class="equipment-container">
                <?php
                if (!empty($messageSixPack)) {
                    echo "<p class='message'>$messageSixPack</p>";
                }
                ?>
                <!-- Equipment input form for 'Six Pack' section -->
                <form class="equipment-form" action="" method="post" enctype="multipart/form-data">
                    <label for="titleSixPack">Equipment Title:</label>
                    <input type="text" name="titleSixPack" required>
                    <label for="descriptionSixPack">Equipment Description:</label>
                    <textarea name="descriptionSixPack" required></textarea>
                    <label for="imageSixPack">Upload Image:</label>
                    <input type="file" name="imageSixPack" accept="image/*" required>
                    <input type="submit" name="addSixPack" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
