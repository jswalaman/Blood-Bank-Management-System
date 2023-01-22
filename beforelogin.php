<?php

  @include 'config.php';

  // Retrieve the blood samples from the database
  $query = "SELECT DISTINCT blood_group, SUM(quantity) FROM blood_inventory GROUP BY blood_group";

  $result = $conn -> query($query);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Blood Samples</title>
  <link rel="stylesheet" href="css/blood_inventory2.css">
</head>
<body style="background-image: url(img/signup_bg.png);">

    <div class="header">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" class="img-fluid">
        </a>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="#">Inventory</a></li>
            <li><a href="signin.php">Login</a></li>
            <li><a href="signup.php">Join us</a></li>
          </ul>
        </nav>
    </div> 

  <div class="whitebox">
    <div id="blood-samples">
      <h2>Available Blood Samples</h2>
      <div class="card-container">
        <?php while ($blood_sample = $result->fetch_assoc()) { ?>
          <div class="card">
            <h3><?php echo $blood_sample['blood_group']; ?></h3>
            <p>Quantity: <?php echo $blood_sample['SUM(quantity)']; ?></p>
            <form action="signin.php" method="POST">
              <p><input type="submit" value="Request Sample"></p>
            </form>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="info">
      <h2>Blood Group Chart</h2>
      <img src="img/donor-recipient.png" alt="">
      <h2>Did you know?</h2>
      <ul>
        <li><span>Blood group O- </span>(also known as universal donor) can donate red blood cells to anyone, but can only receive blood from other people with blood group O-. </li>
        <li><span>Blood group A- </span>can donate red blood cells to individuals with blood group A- and AB-, but can only receive blood from other people with blood group A-. </li>
        <li><span>Blood group B- </span>can donate red blood cells to individuals with blood group B- and AB-, but can only receive blood from other people with blood group B-. </li>
        <li><span>Blood group AB- </span>can donate red blood cells to individuals with blood group AB-, but can receive blood from anyone (also known as universal receiver). </li>
        <li><span>Blood group O+ </span>can donate red blood cells to individuals with blood group O+ and A+, B+, AB+ and can only receive blood from other people with blood group O+. </li>
        <li><span>Blood group A+ </span>can donate red blood cells to individuals with blood group A+ and AB+ and can only receive blood from other people with blood group A+. </li>
        <li><span>Blood group B+ </span>can donate red blood cells to individuals with blood group B+ and AB+ and can only receive blood from other people with blood group B+. </li>
        <li><span>Blood group AB+ </span>can donate red blood cells only to individuals with blood group AB+ but can receive blood from anyone. </li>
      </ul>
    </div>
  </div>
  
</body>
</html>
