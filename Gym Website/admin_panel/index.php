<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../data/css/astyle.css">
</head>
<body>

  <?php
    include "adminHeader.php";
  ?>

  <div id="wrapper">
    <?php
      include "sidebar.php";
    ?>
    <div id="content-wrapper" style="
    flex: 1;
    padding: 22.2%;
    transition: margin-left 0.5s;
    background-image: url('../data/images/hacker1.jpg'); 
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;">
  </div>

  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  <script src="./path/to/your/navbar.js"></script>
  <script src="./path/to/your/sidebar.js"></script>
</body>
</html>