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
    <div class="exerciselast-container">
      <div class="exerciselast-form">
        <h1>Exercise Last Videos</h1>
        <form method="post" action="#" enctype="multipart/form-data">
          <input type="text" name="title" placeholder="Enter Title" required />
          <textarea name="description" placeholder="Enter Description" required></textarea>
          <div class="input">
            <input type="file" name="video" accept="video/*" required>
            <br />
          </div>
          <input type="submit" class="btn" value="Add" name="add">
          
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
            $title = $_POST['title'];
            $description = $_POST['description'];
            $video_file = $_FILES['video']['name'];
            $temp_video = $_FILES['video']['tmp_name'];

            move_uploaded_file($temp_video, "../data/video/$video_file");

            // Prepare the SQL statement using prepared statements
            $qry = "INSERT INTO exerciselast (title, description, video_url) VALUES (?, ?, ?)";
            
            // Prepare the statement
            $stmt = mysqli_prepare($con, $qry);
            
            // Bind parameters
            mysqli_stmt_bind_param($stmt, "sss", $title, $description, $video_file);

            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
              echo "<p>Video saved!!!</p>";
            } else {
              echo "<p>Try again!!!</p>";
            }
            
            // Close the statement
            mysqli_stmt_close($stmt);
          }
          ?>
          
        </form>
      </div>
    </div>
  </div>
</body>
</html>
