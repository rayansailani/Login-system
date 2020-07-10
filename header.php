<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
<header>
    <nav>
    <a href="index.php">Home</a>
    <a href="#">Portfolio</a>
    <a href="#">About me</a>
    <a href="#">Contact</a>
    <a href="signup.php" class="signup-button" style="float:right">Signup</a>
    
    </nav>
    <div>
        <?php
        if(isset($_SESSION['userId'])){
            
    echo '<form action="includes/logout.inc.php" method="post" class="logout-form">
    
    <button type="submit" name="logout-submit" >Log out</button>
    
    </form>';
        }
        else{
            echo '<form action="includes/login.inc.php" method="post" id="login-form">
    <h3>Login</h3>
    <input type="text" name="mailuid" placeholder="Username/Email...">
    <input type="password" name="pwd" placeholder="Password...">
    <button type="submit" name="login-submit" class="login-submit" >Login</button>
    
    </form>';
        }
        ?>
    </div>
    
</header>