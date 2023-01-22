<?php

@include 'config.php';

session_start();
$query = "SELECT blood_group, quantity, date_needed, user_email FROM blood_requests";

$result = $conn -> query($query);
$hospital_name = $_SESSION['hospital_name'];

if(!isset($_SESSION['hospital_name'])){
   header('location:signin2.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/hospital_dashboard.css">
    <title>Document</title>
</head>
<body>
    <section id="dashboard">
        <h2>Hospital Dashboard</h2>
        <h4>Welcome, <?php echo $hospital_name; ?></h4>
        <a href="logout.php">Logout</a>
        <div class="container">
          <div class="card">
            <h3>Manage Blood Inventory</h3>
            <form action="blood_update.php" method="post">
              <table>
                <tr>
                  <th>Blood Type</th>
                  <th>Quantity (in pints)</th>
                  <th>Update</th>
                </tr>
                <tr>
                  <td>A+</td>
                  <td><input type="number" min="0" name="quantityap" placeholder="Enter Quantity"></td>
                  <td><input type="submit" value="Update"></td>
                </tr>
                <tr>
                  <td>A-</td>
                  <td><input type="number" min="0" name="quantityam" placeholder="Enter Quantity"></td>
                  <td><input type="submit" value="Update"></td>
                </tr>
                <tr>
                  <td>B+</td>
                  <td><input type="number" min="0" name="quantitybp" placeholder="Enter Quantity"></td>
                  <td><input type="submit" value="Update"></td>
                </tr>
                <tr>
                  <td>B-</td>
                  <td><input type="number" min="0" name="quantitybm" placeholder="Enter Quantity"></td>
                  <td><input type="submit" value="Update"></td>
                </tr>
                <tr>
                  <td>O-</td>
                  <td><input type="number" min="0" name="quantityom" placeholder="Enter Quantity"></td>
                  <td><input type="submit" value="Update"></td>
                </tr>
                <tr>
                  <td>O+</td>
                  <td><input type="number" min="0" name="quantityop" placeholder="Enter Quantity"></td>
                  <td><input type="submit" value="Update"></td>
                </tr>
                <tr>
                  <td>AB-</td>
                  <td><input type="number" min="0" name="quantityabm" placeholder="Enter Quantity"></td>
                  <td><input type="submit" value="Update"></td>
                </tr>
                <tr>
                  <td>AB+</td>
                  <td><input type="number" min="0" name="quantityabp" placeholder="Enter Quantity"></td>
                  <td><input type="submit" value="Update"></td>
                </tr>
                <!-- Add more rows for the other blood types -->
              </table>
            </form>
          </div>
          <div class="card">
            
            <h3>Blood Requests</h3>
            <table>
              <tr>
                <th>Blood Type</th>
                <th>Quantity (in pints)</th>
                <th>Date Needed</th>
                <th>Email</th>
              </tr>
              <tr>
              <?php while ($blood_sample = $result->fetch_assoc()) { ?>
                <td><?php echo $blood_sample['blood_group']; ?></td>
                <td><?php echo $blood_sample['quantity']; ?></td>
                <td><?php echo $blood_sample['date_needed']; ?></td>
                <td><?php echo $blood_sample['user_email']; ?></td>
              </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </section>
      
</body>
</html>