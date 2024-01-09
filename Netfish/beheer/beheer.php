<?php 

include "connection.php"; 

// if user isn't logged in and/or isn't admin redirect to login page
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
} elseif ($_SESSION['rol'] == 0) {
    header('Location: videos.php');
} else {

  
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Netfish</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
  <h1>Beheer</h1>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Year</th>
        <th>Url</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = 'SELECT * FROM movie';
      $stmt = $conn->query($sql);
      $stmt->execute();
      $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
      foreach ($data as $movie) {
          $id = $movie['id'];
          echo '<tr>';
          echo '<td>' . $movie['title'] . '</td>';
          echo '<td>' . $movie['year'] . '</td>';
          echo '<td>' . $movie['url'] . '</td>';
          echo "<td><a style='text-decoration: none;' href='wijzigen.php?id=" .
                $movie['id'] .
                "'>&#9989;</a></td>";
          echo "<td><a style='text-decoration: none;'  href='verwijderen.php?id=" .
                $movie['id'] .
                "'>&#10062;</a></td>";
          
        }
      ?>
    </tbody>
  </table>
</main>
  <script>
    function confirmationDelete(anchor){
        var conf = confirm('Are you sure want to delete this movie?');
        if(conf)
            window.location=anchor.attr("href");
    }
  </script>
<?php echo "<td><a style='text-decoration: none;'  href='toevoegen.php?id=" .
                $movie['id'] .
                "'><button>&#x2719; Add movie</button></a></td>";?>

</body>
</html>
<?php
}
?>