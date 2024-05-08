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

$messageBicep = ""; // Variable to store the success or error message for bicep equipment

if (isset($_POST['addBicep'])) {
    $pkgtitleBicep = $_POST['titleBicep'];
    $pkgdecBicep = $_POST['descriptionBicep'];
    $pkg_img1Bicep = $_FILES['imageBicep']['name'];
    $temp_img1Bicep = $_FILES['imageBicep']['tmp_name'];

    move_uploaded_file($temp_img1Bicep, "../data/images/$pkg_img1Bicep");

    // Use prepared statement to avoid SQL injection
    $qryBicep = "INSERT INTO equipmentbicep_content (title, description, image_path) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($con, $qryBicep);
    
    // Bind parameters
    mysqli_stmt_bind_param($stmt, "sss", $pkgtitleBicep, $pkgdecBicep, $pkg_img1Bicep);

    if (mysqli_stmt_execute($stmt)) {
        $messageBicep = "Image saved!!!";
    } else {
        $messageBicep = "Try again!!!";
    }

    // Close statement
    mysqli_stmt_close($stmt);
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
        <div class="equipment-bicep-main">
            <div class="equipment-container">
                <?php
                if (!empty($messageBicep)) {
                    echo "<p class='message'>$messageBicep</p>";
                }
                ?>
                <!-- Equipment input form for 'Bicep' section -->
                <form class="equipment-form" action="" method="post" enctype="multipart/form-data">
                    <label for="titleBicep">Equipment Title:</label>
                    <input type="text" name="titleBicep" required>
                    <label for="descriptionBicep">Equipment Description:</label>
                    <textarea name="descriptionBicep" required></textarea>
                    <label for="imageBicep">Upload Image:</label>
                    <input type="file" name="imageBicep" accept="image/*" required>
                    <input type="submit" name="addBicep" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
