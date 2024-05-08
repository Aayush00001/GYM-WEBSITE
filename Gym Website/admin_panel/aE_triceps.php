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

$messageTriceps = ""; // Variable to store the success or error message for triceps equipment

if (isset($_POST['addTriceps'])) {
    $pkgtitleTriceps = $_POST['titleTriceps'];
    $pkgdecTriceps = $_POST['descriptionTriceps'];
    $pkg_img1Triceps = $_FILES['imageTriceps']['name'];
    $temp_img1Triceps = $_FILES['imageTriceps']['tmp_name'];

    move_uploaded_file($temp_img1Triceps, "../data/images/$pkg_img1Triceps");

    $qryTriceps = "INSERT INTO equipmenttriceps_content (title, description, image_path) VALUES ('$pkgtitleTriceps', '$pkgdecTriceps', '$pkg_img1Triceps')";

    if (mysqli_query($con, $qryTriceps)) {
        $messageTriceps = "Image saved!!!";
    } else {
        $messageTriceps = "Try again!!!";
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
        <div class="equipment-triceps-main">
            <div class="equipment-container">
                <?php
                if (!empty($messageTriceps)) {
                    echo "<p class='message'>$messageTriceps</p>";
                }
                ?>
                <!-- Equipment input form for 'Triceps' section -->
                <form class="equipment-form" action="" method="post" enctype="multipart/form-data">
                    <label for="titleTriceps">Equipment Title:</label>
                    <input type="text" name="titleTriceps" required>
                    <label for="descriptionTriceps">Equipment Description:</label>
                    <textarea name="descriptionTriceps" required></textarea>
                    <label for="imageTriceps">Upload Image:</label>
                    <input type="file" name="imageTriceps" accept="image/*" required>
                    <input type="submit" name="addTriceps" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
