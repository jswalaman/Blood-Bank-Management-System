<?php

@include 'config.php';

session_start();
$user_name = $_SESSION['user_name'];

if(!isset($_SESSION['user_name'])){
   header('location:signin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user_dashboard.css">
    <title>Document</title>
</head>
<body>
    <section id="dashboard">
        <h2>Welcome, <?php echo $user_name; ?></h2>
        <a href="logout.php">Logout</a>
        <div class="container">
          <div class="card">
            <h3>Blood Request</h3>
            <form action="requests_form.php" method="post">
              <div class="form-group">
                <label for="blood_type">Blood Type:</label>
                <select id="blood_type" name="blood_group">
                  <option value="A+">A+</option>
                  <option value="B+">B+</option>
                  <option value="AB+">AB+</option>
                  <option value="O+">O+</option>
                  <option value="A-">A-</option>
                  <option value="B-">B-</option>
                  <option value="AB-">AB-</option>
                  <option value="O-">O-</option>
                </select>
              </div>
              <div class="form-group">
                <label for="quantity">Quantity (in pints):</label>
                <input type="number" id="quantity" name="quantity" min="1">
              </div>
              <div class="form-group">
                <label for="date_needed">Date Needed:</label>
                <input type="date" id="date_needed" name="date_needed">
              </div>
              <div class="form-group">
                <label for="date_needed">Email:</label>
                <input type="email" id="date_needed" name="user_email">
              </div>
              <div class="form-group">
                <input type="submit" value="Submit Request">
              </div>
            </form>
          </div>
        </div>
      </section>
      
</body>
</html>