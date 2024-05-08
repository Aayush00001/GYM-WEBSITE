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

$message = ""; // Variable to store the success or error message

if (isset($_POST['add'])) {
    $pkgtitle = $_POST['title'];
    $pkgdec = $_POST['description'];
    $pkg_img1 = $_FILES['image']['name'];
    $temp_img1 = $_FILES['image']['tmp_name'];

    move_uploaded_file($temp_img1, "../data/images/$pkg_img1");

    $qry = "INSERT INTO equipmentchest_content (title, description, image_path) VALUES ('$pkgtitle', '$pkgdec', '$pkg_img1')";

    if (mysqli_query($con, $qry)) {
        $message = "Image saved!!!";
    } else {
        $message = "Try again!!!";
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
        <div class="equipment-chest-main">
            <div class="equipment-container">
                <?php
                if (!empty($message)) {
                    echo "<p class='message'>$message</p>";
                }
                ?>
                <!-- Equipment input form for 'Chest' section -->
                <form class="equipment-form" action="" method="post" enctype="multipart/form-data">
                    <label for="title">Equipment Title:</label>
                    <input type="text" name="title" required>
                    <label for="description">Equipment Description:</label>
                    <textarea name="description" required></textarea>
                    <label for="image">Upload Image:</label>
                    <input type="file" name="image" accept="image/*" required>
                    <input type="submit" name="add" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
