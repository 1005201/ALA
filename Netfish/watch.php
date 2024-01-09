<?php

include('connection.php');


$sql = "SELECT * FROM movie WHERE id = :id ";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':id', $id);

$id = $_GET['id'];

$stmt->execute();

$data = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<link rel="stylesheet" href="stylen.css" type="text/css">
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
    <iframe id="film" src="<?php echo $data['url']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</main>            