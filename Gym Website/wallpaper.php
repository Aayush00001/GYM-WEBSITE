<?php include 'header.php';?>

<!--main content-->
<div class="wallpaper-container">
  <?php
  // Establish database connection (replace with your connection details)
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "gym_database";

  $con = mysqli_connect($host, $username, $password, $database);

  if(!$con){
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM wallpapers_content";
  $results = mysqli_query($con, $sql);

  while ($row = mysqli_fetch_array($results, MYSQLI_BOTH)) {
  ?>
  <div class="wallpaper-container">
    <div class="wallpaper-item">
      <img class="wallpaper-image" src="data/images/<?= $row['image_url']; ?>" alt="<?= $row['name']; ?> Wallpaper">
      <a href="data/images/<?= $row['image_url']; ?>" class="btn" download>DOWNLOAD</a>
    </div>
  </div>
  <?php
  }

  // Close the database connection
  mysqli_close($con);
  ?>
</div>

<?php include 'footer.php';?>
