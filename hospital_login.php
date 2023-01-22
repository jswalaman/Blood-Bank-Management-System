<?php

    @include 'config.php';

    session_start();

    if(!$conn) {
        echo "Connection Failed: ".mysqli_connect_error();
        exit;
    }

    $hospital_email = $_POST['hospital_email'];    
    $hospital_pass = $_POST['hospital_pass'];

    $sql = "SELECT * FROM registered_hospitals WHERE hospital_email = '$hospital_email' && hospital_pass = '$hospital_pass' ";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo "Result failed: ".mysqli_error($conn);
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    if($row){
        $_SESSION['hospital_name'] = $row['hospital_name'];
        header('location:hospital_dashboard.php');
        ?>
        <a href="hospital_dashboard.html"></a>
        <?php
    }else{
        echo "Login Failed! <br/>";
    }

    mysqli_close($conn);

?>