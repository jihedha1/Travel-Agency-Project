
<?php

session_start();
include "./db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])){

    $uname = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$uname' AND password = '$pass' ";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1){

        $row = mysqli_fetch_assoc($result);

        if ($row['username'] === $uname && $row['password'] === $pass) {

           $_SESSION['username'] = $row['username'];
           $_SESSION['name'] = $row['name'];
           $_SESSION['id'] = $row['id'];
           header("Location:./home.php");
           exit();

        }else{

            header("Location:./index.php?error=Incorrect Username or Password");
            exit();

        }


    }else {

        header("Location:./index.php?error=Incorrect Username or Password");
        exit();

    }

}else {

    header("Location:./index.php");
    exit();

}

?>