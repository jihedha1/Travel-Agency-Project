<?php
session_start();
include "./db_conn.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $people = $_POST['people'];
    $message = $_POST['message'];
    $insert_reservation_query = "INSERT INTO reservations (name, email, phone, date, time, people, message) VALUES ('$name', '$email', '$phone', '$date', '$time', '$people', '$message')";
    if (mysqli_query($conn, $insert_reservation_query)) {
        header("Location: ./reservation.html");
        exit();
    } else {
        header("Location: ./error.php");
        exit();
    }
?>
