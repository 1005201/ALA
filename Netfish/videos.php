<?php
include "connection.php";
session_start();
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
    <link rel="stylesheet" href="stylen.css" type="text/css">
    <title>Netfish</title>
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
        <h1>Video's</h1>
  
        <div class="youtube">            
            <?php
            $sql = 'SELECT * FROM movie';
            $stmt = $conn->query($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($data as $movie) :  ?>
                <div class="youtube2">
                    <a href="watch.php?id=<?php echo $movie['id'] ?>"> <img src="image/<?php echo $movie['image'] ?>" alt="video" style="width: 300px; height: 150px;" /></a>
                    <div class="youtube2">
                        <?php echo $movie['description'] ?>
                    </div>
                </div>   
            <?php endforeach ?>
        </div>

    </main>
    
</script>
    <?php print_r($_SESSION) ?>
</body>
</html>

