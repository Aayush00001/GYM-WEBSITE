<?php include 'header.php';?>

<!--main contente-->'
<body style="background-color: #666666;">
<div class="container">
<div class="feed">

  <h1>Feedback Page</h1>
    <form id="feedbackForm" action="feedbackd.php" method="post">
      <div class="form-group">
        <label for="name">Your Name:</label>
          <input type="text"class="form-control" id="putname" name="name" required>
      </div>
      <div class="form-group">
          <label for="feedback">Your Feedback:</label>
          <textarea class="form-control"id="feedback" name="putfeedback" rows="4" required></textarea>
      </div>
          <button type="submit" class="btn btn-primary">Submit Feedback</button>
    </form>
</div>
</div><br/><br/><br/><br/><br/>

<?php include 'footer.php';?>