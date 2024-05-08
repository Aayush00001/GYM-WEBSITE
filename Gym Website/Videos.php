<?php include 'header.php';?>

<div class="video-container">
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

  $sql = "SELECT * FROM videos_content";
  $results = mysqli_query($con, $sql);

  while ($row = mysqli_fetch_array($results, MYSQLI_BOTH)) {
  ?>
  <div class="video-item" onmouseenter="playVideo(this)" onmouseleave="pauseVideo(this)">
    <video class="video-player" controls>
      <source src="data/video/<?= $row['video_url']; ?>" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <a href="data/video/<?= $row['video_url']; ?>" class="btn" download>DOWNLOAD</a>
  </div>
  <?php
  }

  // Close the database connection
  mysqli_close($con);
  ?>
</div>

<script>
function playVideo(videoItem) {
    const video = videoItem.querySelector('.video-player');
    video.play();
}

function pauseVideo(videoItem) {
    const video = videoItem.querySelector('.video-player');
    video.pause();
}
</script>

<?php include 'footer.php';?>
