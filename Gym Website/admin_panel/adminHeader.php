<!-- navbar.php -->
<?php
   session_start();
   if(!isset($_SESSION['AdminLoginId']))
   {
       header("location: adminlogin.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Add Font Awesome CSS link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SYw9AD1QJFwF+qt61Sz/FA6UdA2kD5I2aUpYj2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../data/css/astyle.css">
</head>

<body>
  <div class="custom-navbar">
    <a class="custom-home-btn" onclick="toggleSidebar()">Home</a>
    <form method="POST">
      <button name="Logout" class="custom-logout-btn">Log Out</button>
    </form>
  </div>

  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById("otcSidebar");
      const sidebarStyle = window.getComputedStyle(sidebar);
      const sidebarLeft = sidebarStyle.getPropertyValue('left');

      if (sidebarLeft === '-250px') {
        sidebar.style.left = '0';
      } else {
        sidebar.style.left = '-250px';
      }
    }
  </script>

<?php
 if(isset($_POST['Logout'])){
    header("location: adminlogin.php");
    session_destroy();
    }
?>
</body>
</html>