<?php
session_start();

include "connection.php"; 

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netfish</title>
    <link rel="stylesheet" type="text/css" href="stylen.css">
</head>

<body>
    <header>
        <nav>
            <div class="image1">
                <a href="index.php"><img src="image/NETFISH_LogoWebsite.jpg" style="height: 100px;"></a>
            </div>
            <ul>
                <li><a href="videos.php">Video's</a></li>
                <li><a href="beheer.php">Beheer</a></li>
                <li><a href="login.php">Inloggen</a></li> 
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="form-group">
                <?php echo '<h2>Welcome ' . $_SESSION['user']['username'] . '</h2>'; ?>
            </div>    
            <div class="form-group">
                <?php echo '<h2>Je e-mailadres is: ' . $_SESSION['user']['email'] . '</h2>'; ?>
            </div>        
            <!-- <?php if($_SESSION['user']['rol'] == 0){
                echo false;
                echo 'false';
            } elseif($_SESSION['user']['rol'] == 1){
                echo true;
                echo 'true';
            }; ?> -->
            <div class="form-group">
                <a class="" href="logout.php">Logout</a>
            </div>    
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>