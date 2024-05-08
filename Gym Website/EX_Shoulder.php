<?php include 'header.php';?>
<div class="basicback">
  <div class="main5">
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

    $sql = "SELECT * FROM exerciseshoulder";
    $results = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_array($results, MYSQLI_BOTH)) {
    ?>
    <!-- Exercise Shoulder Section -->
    <div class="equipment-section5" onmouseenter="playVideo(this)" onmouseleave="pauseVideo(this)">
      <div class="equipment-video5">
      <video class="videos" controls>
          <source src="data/video/<?= $row['video_url']; ?>" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
      <div class="equipment-info5">
        <h2><?= $row['title']; ?></h2>
        <p><?= $row['description']; ?></p>
      </div>
    </div>
    <?php
    }

    // Close the database connection
    mysqli_close($con);
    ?>
  </div>
</div>

<script>
function playVideo(videoItem) {
    const video = videoItem.querySelector('.videos');
    video.play();
}

function pauseVideo(videoItem) {
    const video = videoItem.querySelector('.videos');
    video.pause();
}
</script>

<?php include 'footer.php';?>
