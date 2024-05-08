<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Logout functionality
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logout'])) {
    // Destroy the session
    session_destroy();
    
    // Redirect to the login page
    header("Location: Home.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>GYM</title>
  <link rel="icon" href="data\images\logo.png"> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link href="data/css/style1.css" rel="Stylesheet">
</head>
<body>

<!-- Navbar section -->
<div class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="Home.Php"><img src="data\images\logo.png" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item px-1">
          <a href="about.php" class="nav-link">ABOUT</a>
        </li>
<!--------------------------------------------------------------------------------------------------------------------------------------->
        <li class="nav-item px-1">
          <a href="wallpaper.php" class="nav-link">GALLERY</a>
        </li>
<!--------------------------------------------------------------------------------------------------------------------------------------->
         <li class="nav-item px-1">
            <a href="videos.php"class="nav-link">VIDEOS</a>
          </li>
<!--------------------------------------------------------------------------------------------------------------------------------------->           
          <li class="nav-item px-1">
            <a href="qoutes.php"class="nav-link">QUOTES</a>
          </li>
<!--------------------------------------------------------------------------------------------------------------------------------------->           
          <li class="nav-item dropdown px-1">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">EQUIPMENT</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="E_chest.php">Chest</a></li>
                <li><a class="dropdown-item" href="E_Shoulder.php">Shoulder</a></li>
                <li><a class="dropdown-item" href="E_Last.php">Lats</a></li>
                <li><a class="dropdown-item" href="E_bicep.php">Bicep</a></li>
                <li><a class="dropdown-item" href="E_tricep.php">Triceps</a></li>
                <li><a class="dropdown-item" href="E_squts.php">Squats</a></li>
                <li><a class="dropdown-item" href="E_sixpack.php">SixPack Abs</a></li>
              </ul>
          </li> 
<!---------------------------------------------------------------------------------------------------------------------------------------> 
<li class="nav-item dropdown px-1">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">EXERCISE</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="EX_chest.php">Chest</a></li>
                <li><a class="dropdown-item" href="EX_Shoulder.php">Shoulder</a></li>
                <li><a class="dropdown-item" href="EX_Last.php">Lats</a></li>
                <li><a class="dropdown-item" href="EX_bicep.php">Bicep</a></li>
                <li><a class="dropdown-item" href="EX_tricep.php">Triceps</a></li>
                <li><a class="dropdown-item" href="EX_squts.php">Squats</a></li>
                <li><a class="dropdown-item" href="EX_sixpack.php">SixPack Abs</a></li>
              </ul>
          </li> 
<!---------------------------------------------------------------------------------------------------------------------------------------> 
           <li class="nav-item dropdown px-1">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">DIET PLANS</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="beast_diet.php">BEAST MODE DIET</a></li>
                <li><a class="dropdown-item" href="lean_diet.php">LEAN DIET</a></li>
                <li><a class="dropdown-item" href="sixpack_diet.php">SIXPACK DIET</a></li>
              </ul>
            </li> 
<!--------------------------------------------------------------------------------------------------------------------------------------->          
          <li class="nav-item px-1">
            <a href="feedback.php"class="nav-link">FEEDBACKS</a>
          </li>
      </ul>
       <form class="d-flex ml-auto" method="post" action="">
        <button class="btn btn-outline-light" type="submit" name="logout">Logout</button>
      </form>
<!--------------------------------------------------------------------------------------------------------------------------------------->    
</div>
</div>
</div> 