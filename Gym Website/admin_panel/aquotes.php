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
  <div id="wrapper">
    <?php include "sidebar.php";?>
    <div class="quotes-admin-main">
      <div class="quotes-container">
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

          // Function to insert content into the database
          function insertQuote($quote, $conn)
          {
            $quote = mysqli_real_escape_string($conn, $quote);

            $query = "INSERT INTO quotes_content (quote) VALUES ('$quote')";
            $result = mysqli_query($conn, $query);

            return $result;
          }

          // Check if form is submitted
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $quote = $_POST['quote'];

            // Insert quote into the database
            $insertResult = insertQuote($quote, $connection);

            if ($insertResult) {
              echo "<p>Quote inserted successfully!</p>";
            } else {
              echo "<p>Error inserting quote: " . mysqli_error($connection) . "</p>";
            }
          }
        ?>

        <!-- Admin input form for 'Quotes' section -->
        <form class="quotes-form" action="" method="post">
          <label for="quote">Quote:</label>
          <textarea name="quote" required></textarea>
          <input type="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>
</body>

</html>
