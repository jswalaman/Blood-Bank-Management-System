<?php

    @include 'config.php';

    session_start();

    if(!$conn) {
        echo "Connection Failed: ".mysqli_connect_error();
        exit;
    }

    $blood_group = $_POST['blood_group'];    
    $quantity = $_POST['quantity'];
    $date_needed = $_POST['date_needed'];     
    $user_email = $_POST['user_email'];

    $sql = "INSERT INTO blood_requests(blood_group, quantity, date_needed, user_email) VALUES('$blood_group', '$quantity', '$date_needed', '$user_email')";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo "Result failed: ".mysqli_error($conn);
        exit;
    }else{
        header('location:user_dashboard.php');
        ?>
        <a href="user_dashboard.html"></a>
        <?php
    }

    mysqli_close($conn);

?>