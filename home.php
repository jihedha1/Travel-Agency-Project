

<?php

session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Webpage</title>
    <link rel="stylesheet" href="./home1.css">
    <link rel="icon" href="./logo sans titre.png" type="image/x-icon">
    <link rel="shortcut icon" href="./logo sans titre.png" type="image/x-icon">   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Protest+Guerrilla&family=Protest+Revolution&family=Protest+Riot&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
<div class="nav"> 
    <img class="logo" src="./logo sans titre.png" alt="">
    <p class="zzz">Le voyage libre </p>
</div> 
<div class="row">
          <div class="col-md-12 text-center">
            <h3 class="animate-charcter">Hello , <?php echo  $_SESSION['username']; ?> </h3>
            <br>
            <button class="button2"><a class="ss" href="./index.html">START</a></button>
          </div>
        </div>

</body>
</html>


<?php

}else {
    header("Location:./index.php");
    exit();
}

?>