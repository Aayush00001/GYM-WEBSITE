<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../data/css/astyle.css">
</head>


<body style="background-color:#666666;">
  <?php
  include "adminHeader.php";
  ?>

  <div class="wrapper">
    <?php
    include "sidebar.php";
    ?>
 </div>
    <div class="new-admin-dashboard">
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

      // Fetch total signup users based on options
      $option = isset($_GET['option']) ? $_GET['option'] : 1;

      if ($option == 1) {
        $query = "SELECT COUNT(id) AS total_users FROM users";
      } elseif ($option == 2) {
        // Modify the query based on your option 2 criteria
        // $query = "SELECT COUNT(id) AS total_users FROM users WHERE ...";
      } elseif ($option == 3) {
        // Modify the query based on your option 3 criteria
        // $query = "SELECT COUNT(id) AS total_users FROM users WHERE ...";
      }

      $result = mysqli_query($connection, $query);
      $row = mysqli_fetch_assoc($result);
      $totalUsers = $row['total_users'];

      // Close the database connection
      mysqli_close($connection);
      ?>

      <div class="new-total-users-box">
        <div class="new-user-icon">
          <img src="../data/images/user.png" alt="User Icon">
        </div>
        <div class="new-user-info">
          <h2>Total Signup Users</h2>
          <p><?php echo $totalUsers; ?></p>
        </div>
      </div>
      <!-- Other dashboard components can be added here -->
    </div>

    <!-- Third box -->
    <div class="new-admin-dashboard1">
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

      // Fetch total website views
      $query = "SELECT COUNT(id) AS total_views FROM website_views";
      $result = mysqli_query($connection, $query);
      $row = mysqli_fetch_assoc($result);
      $totalViews = $row['total_views'];

      // Close the database connection
      mysqli_close($connection);
      ?>

      <div class="new-total-users-box1">
        <div class="new-user-icon1">
          <img src="../data/images/user.png" alt="User Icon">
        </div>
        <div class="new-user-info1">
          <h2>Total Website Views</h2>
          <p><?php echo $totalViews; ?></p>
        </div>
      </div>
    </div>
 
</body>

</html>

