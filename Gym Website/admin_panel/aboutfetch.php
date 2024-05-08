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
        $dbname = "gym_database";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    ?>

    <?php
        $sql = "SELECT * FROM about_content";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='custom-table'>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['title']}</td>
                        <td>{$row['description']}</td>
                        <td class='action-links'>
                            <a href='aboutupdate.php?id={$row['id']}'>Update</a>
                            <a href='aboutdelete.php?id={$row['id']}'>Delete</a>
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
