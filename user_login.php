<?php

    @include 'config.php';

    session_start();

    if(!$conn) {
        echo "Connection Failed: ".mysqli_connect_error();
        exit;
    }

    $user_email = $_POST['user_email'];    
    $user_pass = $_POST['user_pass'];

    $sql = " SELECT * FROM registered_users WHERE user_email = '$user_email' && user_pass = '$user_pass' ";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo "Result failed: ".mysqli_error($conn);
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    if($row){
        $_SESSION['user_name'] = $row['user_name'];
        header('location:user_dashboard.php');
        ?>
        <a href="user_dashboard.html"></a>
        <?php
    }else{
        echo "Login Failed! <br/>";
    }

    mysqli_close($conn);

?>