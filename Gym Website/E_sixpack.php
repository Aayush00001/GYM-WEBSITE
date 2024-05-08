<?php include 'header.php'; ?>
<body style="background-image:url(./data/images/flame1.gif);background-size: cover;background-position: center;">
    <!-- Main content for Equipment Six Pack -->
    <div class="main2">
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

        $sql = "SELECT * FROM equipmentsixpack_content";
        $results = mysqli_query($con, $sql);

        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_assoc($results)) {
                $imagePath = "data/images/" . $row['image_path'];
        ?>
                <!-- Equipment Section -->
                <div class="equipment-section">
                    <div class="equipment-img">
                        <img src="<?= $imagePath; ?>" alt="<?= $row['title']; ?>">
                    </div>
                    <div class="equipment-info">
                        <h2><?= $row['title']; ?></h2>
                        <p><?= $row['description']; ?></p>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<p>No equipment found.</p>";
        }

        // Close the database connection
        mysqli_close($con);
        ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
