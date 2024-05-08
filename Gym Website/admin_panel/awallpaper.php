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
    <div class="wallpaper-container">
    <div class="wallpaper-form">
      <h1>ADD WALLPAPERS</h1>
      <form method="post" action="#" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Enter NAME" required />
        <div class="input">
          <input type="file" name="photo1" required>
          <br />
        </div>
        <input type="submit" class="btn" value="Add" name="add">
      </form>

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

      if (isset($_POST['add'])) {
        $pkgnm = $_POST['name'];
        $pkg_img1 = $_FILES['photo1']['name'];
        $temp_img1 = $_FILES['photo1']['tmp_name'];

        move_uploaded_file($temp_img1, "../data/images/$pkg_img1");

        $qry = "INSERT INTO wallpapers_content (name, image_url) VALUES ('$pkgnm', '$pkg_img1')";

        if (mysqli_query($con, $qry)) {
          echo "Image saved!!!";
        } else {
          echo "Try again!!!";
        }
      }

      // Close the database connection
      mysqli_close($con);
      ?>
    </div>
  </div>
</div>
</body>

</html>
