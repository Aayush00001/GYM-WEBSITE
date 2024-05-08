<?php
// track_view.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$insert_view_sql = "INSERT INTO website_views (view_time) VALUES (NOW())";
$conn->query($insert_view_sql);

$conn->close();
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

<!--main content-->
<div class="hero">
	<video autoplay loop muted plays-inline class="back-video">
		<source src="data\video\GYM.mp4"type="video/mp4">
	</video>
	<div class="content">
		 <h4>No Ex , No Next , Only Need Abs</h4><br/>
		 <a onclick="openPopup()">Click Me</a>
		<div class="popup" id="popup-1">
		  <div class="close-btn" onclick="closePopup()">&times;</div>
		  <div class="heading">
		 		<h1>\\ CHOOSE ONE  \\</h1>
		  </div>
		 	<div class="options">
		 		<div class="make">
		 			<a href="login.php">LOGIN</a>	
		 		</div>
		 	  <div class="sign">
		 			<a href="signin.php">SIGN UP</a>	
		 		</div>
		 	</div>
		 </div>
	</div>
</div>

<!--Script section-->
<script type="text/javascript">
        	let popup = document.getElementById("popup-1");

        	function openPopup() {
        		popup.classList.add("open-popup");
        	}

        	function closePopup() {
        		popup.classList.remove("open-popup");
        	}
</script>
<script>
    // Function to track website view
    function trackView() {
        // Create a new XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Specify the type of request and the URL
        xhr.open('GET', 'track_view.php', true);

        // Send the request
        xhr.send();
    }

    // Call the trackView function when the page loads
    window.onload = function () {
        trackView();
    };
</script>
</body>
</html>