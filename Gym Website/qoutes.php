<?php include 'header.php';?>
<body>
  <div class="main">
    <div class="container">
      <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "gym_database";

        $connection = mysqli_connect($host, $username, $password, $database);

        if (!$connection) {
          die("Connection failed: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM quotes_content";
        $result = mysqli_query($connection, $query);

        while ($records = mysqli_fetch_array($result, MYSQLI_BOTH)) {
          echo '<div class="modified-quote">';
          echo '<p>' . $records['quote'] . '</p>';
          echo '</div>';
        }
      ?>
    </div>
  </div>

  <?php include 'footer.php';?>
</body>

</html>
