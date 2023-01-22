<?php

    @include 'config.php';

    if(!$conn) {
        echo "Connection Failed: ".mysqli_connect_error();
        exit;
    }

    $hospital_name = $_POST['hospital_name'];
    $hospital_email = $_POST['hospital_email'];    
    $hospital_pass = $_POST['hospital_pass'];
    $hospital_phone = $_POST['hospital_phone'];
    $hospital_city = $_POST['hospital_city'];

    $sql = "INSERT INTO registered_hospitals(hospital_name, hospital_email, hospital_pass, hospital_phone, hospital_city) VALUES('$hospital_name', '$hospital_email', '$hospital_pass', '$hospital_phone', '$hospital_city')";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo "Result failed: ".mysqli_error($conn);
        exit;
    }

    echo "Registration Successful!";
    mysqli_close($conn);

?>