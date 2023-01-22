<?php

    @include 'config.php';

    if(!$conn) {
        echo "Connection Failed: ".mysqli_connect_error();
        exit;
    }

    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];    
    $user_pass = $_POST['user_pass'];
    $user_phone = $_POST['user_phone'];
    $user_city = $_POST['user_city'];
    $user_bloodgroup = $_POST['user_bloodgroup'];

    $sql = "INSERT INTO registered_users(user_name, user_email, user_pass, user_phone, user_bloodgroup, user_city) VALUES('$user_name', '$user_email', '$user_pass', '$user_phone', '$user_bloodgroup', '$user_city')";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo "Result failed: ".mysqli_error($conn);
        exit;
    }

    echo "Registration Successful!";
    mysqli_close($conn);

?>