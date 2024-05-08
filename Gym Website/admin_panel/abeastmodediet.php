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
    <div class="beast-mode-diet-admin-main">
      <div class="beast-mode-diet-container">
        <?php
          // Database connection setup (replace with your connection details)
          $host = "localhost";
          $username = "root";
          $password = "";
          $database = "gym_database";

          $connection = mysqli_connect($host, $username, $password, $database);

          if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
          }

          // Function to insert content into the database
          function insertBeastModeDietContent($title, $description, $conn)
          {
            $title = mysqli_real_escape_string($conn, $title);
            $description = mysqli_real_escape_string($conn, $description);

            $query = "INSERT INTO beast_mode_diet_content (title, description) VALUES ('$title', '$description')";
            $result = mysqli_query($conn, $query);

            return $result;
          }

          // Check if form is submitted
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = $_POST['title'];
            $description = $_POST['description'];

            // Insert content into the database
            $insertResult = insertBeastModeDietContent($title, $description, $connection);

            if ($insertResult) {
              echo "<p>Content inserted successfully!</p>";
            } else {
              echo "<p>Error inserting content: " . mysqli_error($connection) . "</p>";
            }
          }
        ?>

        <!-- Admin input form for 'Beast Mode Diet' section -->
        <form class="beast-mode-diet-form" action="" method="post">
          <label for="title">Title:</label>
          <input type="text" name="title" required>
          <label for="description">Description:</label>
          <textarea name="description" required></textarea>
          <input type="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>
</body>

</html>
