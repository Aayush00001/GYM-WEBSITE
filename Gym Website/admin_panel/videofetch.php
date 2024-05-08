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
  <div class="table-container">
    <?php include "sidebar.php";?>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gym_database"; // Change this to your database name

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    ?>

    <?php
        $sql = "SELECT * FROM videos_content";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='custom-table'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Video URL</th>
                    <th>Video Preview</th>
                    <th>Action</th>
                </tr>";

            while ($row = $result->fetch_assoc()) {
                $videoPath = "../data/video/{$row['video_url']}"; // Adjust the path accordingly
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['video_url']}</td>
                        <td>
                            <video width='100' height='80' controls>
                                <source src='{$videoPath}' type='video/mp4'>
                                Your browser does not support the video tag.
                            </video>
                        </td>
                        <td class='action-links'>
                            <a href='videoupdate.php?id={$row['id']}'>Update</a>
                            <a href='videodelete.php?id={$row['id']}'>Delete</a>
                        </td>
                    </tr>";
            }

            echo "</table>";
        } else {
            echo "0 results";
        }

        $conn->close();
    ?>
  </div>
</body>

</html>
