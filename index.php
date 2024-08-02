<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System </title>
    <link rel="stylesheet" href="./style.css">
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
        <p class="a">Le voyage libre </p>
    </div> 
    <video autoplay loop muted plays-inline class="back-video" >
        <source src="./12.mp4" type="video/mp4">
    </video>
    <div class="abody">
        <div class="container">
            <form action="./login.php" method="POST">
                <h2>Account Login</h2>

                <?php

                    if(isset($_GET['error'])) {
                        ?>

                            <p class="error"><?php echo $_GET['error']; ?></p>

                        <?php
                    }

                ?>

                <div class="inputBox">
                    <input type="text" name="username" id="fullname" required>
                    <label for="#">&nbsp; Username</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="password" id="password" required>
                    <label for="#">&nbsp; Password</label>
                </div>
                <div class="inputBox">
                    <input type="submit" id="submit" value="Sign In">
                </div>
                <p>Dont have an account ? <a href="index1.php">Signup</a></p>
            </form>
        </div>
        <script>

            let label = document.querySelectorAll('label').forEach(label => {
                label.innerHTML = label.innerText.split('').map((letters, i) => `<span style="transition-delay: ${ i* 50}ms" > ${letters}</span>`).join('');
            })

        </script>
    </div>   
</body>
<script src="./sign.js" ></script>
</html>