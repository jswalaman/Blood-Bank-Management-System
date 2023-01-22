<?php

    @include 'config.php';

    if(!$conn) {
        echo "Connection Failed: ".mysqli_connect_error();
        exit;
    }

    $quantityam = $_POST['quantityam'];
    $quantityap = $_POST['quantityap'];
    $quantitybm = $_POST['quantitybm'];
    $quantitybp = $_POST['quantitybp'];
    $quantityabm = $_POST['quantityabm'];
    $quantityabp = $_POST['quantityabp'];
    $quantityom = $_POST['quantityom'];
    $quantityop = $_POST['quantityop'];

    $am = "INSERT INTO blood_inventory(blood_group, quantity) VALUES('A-', '$quantityam')";
    $ap = "INSERT INTO blood_inventory(blood_group, quantity) VALUES('A+', '$quantityap')";
    $bp = "INSERT INTO blood_inventory(blood_group, quantity) VALUES('B+', '$quantitybp')";
    $bm = "INSERT INTO blood_inventory(blood_group, quantity) VALUES('B-', '$quantitybm')";
    $abp = "INSERT INTO blood_inventory(blood_group, quantity) VALUES('AB+', '$quantityabp')";
    $abm = "INSERT INTO blood_inventory(blood_group, quantity) VALUES('AB-', '$quantityabm')";
    $op = "INSERT INTO blood_inventory(blood_group, quantity) VALUES('O+', '$quantityop')";
    $om = "INSERT INTO blood_inventory(blood_group, quantity) VALUES('0-', '$quantityom')";
    $del = "DELETE FROM blood_inventory WHERE quantity=0";

    $result = mysqli_query($conn, $am);
    $result1 = mysqli_query($conn, $ap);
    $result2 = mysqli_query($conn, $del);
    if(!$result){
        echo "Result failed: ".mysqli_error($conn);
        exit;
    }else{
        header('location:hospital_dashboard.php');
    }
    mysqli_close($conn);

?>