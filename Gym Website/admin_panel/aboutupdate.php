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
<?php include "adminHeader.php"; ?>
    <div class="update-form-main">
        <?php include "sidebar.php"; ?>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gym_database";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM about_content WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $id = $_POST['id'];
                    $title = $_POST['title'];
                    $description = $_POST['description'];

                    // Validate and sanitize user input to prevent SQL injection
                    $title = mysqli_real_escape_string($conn, $title);
                    $description = mysqli_real_escape_string($conn, $description);

                    $updateSql = "UPDATE about_content SET title='$title', description='$description' WHERE id=$id";
                    $updateResult = $conn->query($updateSql);

                    if ($updateResult) {
                        echo "Record updated successfully.";
                        // Redirect to about fetch page
                        echo '<script>alert("Record updated successfully.");</script>';
                        echo '<script>window.location.href = "aboutfetch.php";</script>';
                        exit();
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }
                }
                ?>
                <div class="update-form-container">
                    <form class="update-form" action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" value="<?php echo $row['title']; ?>"><br>
                        <label for="description">Description:</label>
                        <textarea name="description" id="description"><?php echo $row['description']; ?></textarea><br>
                        <input type="submit" value="Update">
                    </form>
                </div>
                <?php
            } else {
                echo "Record not found.";
            }
        } else {
            echo "Invalid request.";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>