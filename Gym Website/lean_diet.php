<?php include 'header.php';?>

<div class="lean-mode-diet-main">
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
        $query = "SELECT * FROM lean_diet_mode_content      ";
        $result = mysqli_query($connection, $query);
        while ($records = mysqli_fetch_array($result, MYSQLI_BOTH)) {
            echo '<div class="diet-info">';
            echo '<h2>' . $records['title'] . '</h2>';
            echo '<p>' . $records['description'] . '</p>';
            echo '</div>';
        }
        ?>

    </div>
</div>

<?php include 'footer.php';?>
