<?php
session_start();
include "./db_conn.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
        $insert_user_query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if (mysqli_query($conn, $insert_user_query)) {
            $_SESSION['username'] = $username;
            header("Location: ./home.php");
            exit();
        } else {
            header("Location:./index1.php?error=Erreur lors de l'inscription");
            exit();
        }
    
?>