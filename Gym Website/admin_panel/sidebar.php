<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Add Font Awesome CSS link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SYw9AD1QJFwF+qt61Sz/FA6UdA2kD5I2aUpYj2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../data/css/astyle.css">
</head>

<body>

  <nav id="otcSidebar">
    <div class="otc-side-header">
      <a href="index.php"><img src="../data/images/alogo.png" width="120" height="120"></a>
      <h5 style="margin-top:10px;">Hiiii , <?php echo $_SESSION['AdminLoginId']?></h5>
    </div>

    <a href="duser.php"><i class="fa fa-dashboard"></i> Dashboard</a>


    <div class="otc-dropdown">
      <a href="#"><i class="fa fa-info-circle"></i> About</a>
      <div class="otc-dropdown-content">
        <a href="about.php">Add About Info</a>
        <a href="aboutfetch.php">Manage About Info</a>
      </div>
    </div>


    <div class="otc-dropdown">
      <a href="#"><i class="fa fa-picture-o"></i> Wallpapers</a>
      <div class="otc-dropdown-content">
        <a href="awallpaper.php">Add Wallpapers</a>
        <a href="wallpaperfetch.php">Manage Wallpapers Info</a>
      </div>
    </div>


    <div class="otc-dropdown">
      <a href="#"><i class="fa fa-film"></i> Videos</a>
      <div class="otc-dropdown-content">
        <a href="avideo.php">Add Videos</a>
        <a href="videofetch.php">Manage Videos Info</a>
      </div>
    </div>


    <div class="otc-dropdown">
      <a href="#"><i class="fa fa-quote-left"></i> Quotes</a>
      <div class="otc-dropdown-content">
        <a href="aquotes.php">Add Quotes</a>
        <a href="qoutesfetch.php">Manage Quotes Info</a>
      </div>
    </div>





    <div class="otc-dropdown">
      <a href="#"><i class="fas fa-bicycle"></i> Equipment</a>
      <div class="otc-dropdown-content">
        
        <div class="otc-sub-dropdown">
          <a href="#">Chest</a>
          <div class="otc-sub-dropdown-content">
            <a href="aE_chest.php">Add Info</a>
            <!-- Add more sub-sub-dropdown items as needed -->
          </div>
        </div>

        <div class="otc-sub-dropdown">
          <a href="#">Shoulder</a>
          <div class="otc-sub-dropdown-content">
            <a href="aE_shoulder.php">Add Info</a>
            <!-- Add more sub-sub-dropdown items as needed -->
          </div>
        </div>

        <div class="otc-sub-dropdown">
          <a href="#">Last</a>
          <div class="otc-sub-dropdown-content">
            <a href="aE_last.php">Add Info</a>
            <!-- Add more sub-sub-dropdown items as needed -->
          </div>
        </div>

        <div class="otc-sub-dropdown">
          <a href="#">Biceps</a>
          <div class="otc-sub-dropdown-content">
            <a href="aE_bicep.php">Add Info</a>
            <!-- Add more sub-sub-dropdown items as needed -->
          </div>
        </div>

        <div class="otc-sub-dropdown">
          <a href="#">Triceps</a>
          <div class="otc-sub-dropdown-content">
            <a href="aE_triceps.php">Add Info</a>
            <!-- Add more sub-sub-dropdown items as needed -->
          </div>
        </div>

        <div class="otc-sub-dropdown">
          <a href="#">sixpack</a>
          <div class="otc-sub-dropdown-content">
            <a href="aE_sixpack.php">Add Info</a>
            <!-- Add more sub-sub-dropdown items as needed -->
          </div>
        </div>

        <div class="otc-sub-dropdown">
          <a href="#">Squts</a>
          <div class="otc-sub-dropdown-content">
            <a href="aE_squts.php">Add Info</a>
            <!-- Add more sub-sub-dropdown items as needed -->
          </div>
        </div>  

      </div>
    </div>




    <div class="otc-dropdown">
      <a href="#"><i class="fas fa-bicycle"></i> Exercise</a>
      <div class="otc-dropdown-content">
        
        <div class="otc-sub-dropdown">
          <a href="#">Chest</a>
          <div class="otc-sub-dropdown-content">
            <a href="aEX_chest.php">Add Info</a>
            <!-- Add more sub-sub-dropdown items as needed -->
          </div>
        </div>

        <div class="otc-sub-dropdown">
          <a href="#">Shoulder</a>
          <div class="otc-sub-dropdown-content">
            <a href="aEX_shoulder.php">Add Info</a>
            <!-- Add more sub-sub-dropdown items as needed -->
          </div>
        </div>

        <div class="otc-sub-dropdown">
          <a href="#">Last</a>
          <div class="otc-sub-dropdown-content">
            <a href="aEX_last.php">Add Info</a>
            <!-- Add more sub-sub-dropdown items as needed -->
          </div>
        </div>

        <div class="otc-sub-dropdown">
          <a href="#">Biceps</a>
          <div class="otc-sub-dropdown-content">
            <a href="aEX_biceps.php">Add Info</a>
            <!-- Add more sub-sub-dropdown items as needed -->
          </div>
        </div>

        <div class="otc-sub-dropdown">
          <a href="#">Triceps</a>
          <div class="otc-sub-dropdown-content">
            <a href="aEX_triceps.php">Add Info</a>
            <!-- Add more sub-sub-dropdown items as needed -->
          </div>
        </div>

        <div class="otc-sub-dropdown">
          <a href="#">sixpack</a>
          <div class="otc-sub-dropdown-content">
            <a href="aEX_sixpackabs.php">Add Info</a>
            <!-- Add more sub-sub-dropdown items as needed -->
          </div>
        </div>

        <div class="otc-sub-dropdown">
          <a href="#">Squts</a>
          <div class="otc-sub-dropdown-content">
            <a href="aEX_squats.php">Add Info</a>
            <!-- Add more sub-sub-dropdown items as needed -->
          </div>
        </div>  

      </div>
    </div>












    <div class="otc-dropdown">
      <a href="#"><i class="fas fa-bicycle"></i> diet Plans</a>
      <div class="otc-dropdown-content">

        <div class="otc-sub-dropdown">
          <a href="#">Beast Mode Diet</a>
          <div class="otc-sub-dropdown-content">
            <a href="abeastmodediet.php">Add Beast Mode Diet</a>
            <!-- Add more sub-sub-dropdown items as needed -->
          </div>
        </div>

        <div class="otc-sub-dropdown">
          <a href="#">lean Mode Diet</a>
          <div class="otc-sub-dropdown-content">
            <a href="aleanmodediet.php">Add lean Mode Diet</a>
            <!-- Add more sub-sub-dropdown items as needed -->
          </div>
        </div>

        <div class="otc-sub-dropdown">
          <a href="#">sixpack Mode Diet</a>
          <div class="otc-sub-dropdown-content">
            <a href="sixpackmodediet.php">Add sixpack Mode Diet</a>
            <!-- Add more sub-sub-dropdown items as needed -->
          </div>
        </div>
        
      </div>
    </div>
    
    




    <div class="otc-dropdown">
      <a href="#"><i class="fas fa-comment"></i> Feedbacks</a>
      <div class="otc-dropdown-content">
        <a href="feedbackfetch.php">Manage Feedbacks Info</a>
      </div>
    </div>





    
  </nav>

</body>

</html>
