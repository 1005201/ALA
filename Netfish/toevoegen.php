<?php 

include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Netfish</title> 
</head>
<body>
  <div class="container">
    <form class="form" action="" method="post">
        <h1 class="page-title uppercase"><span class="text-red center">A</span>dd movie</h1>
        <div class="mb-3">
        <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="" />
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">Url:</label>
            <input type="text" class="form-control" id="url" name="url"  value="" />
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Year:</label>
            <input type="text" class="form-control" id="year" name="year"  value="" />
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <input type="text" class="form-control" id="description" name="description"  value="" />
        </div>
        <div class="mb-3">
                <label for="image" class="form-label">Upload image:</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
        <br>
        <button type="submit" name="submit" class="btn btn-dark">ADD movie</button>
        <span class="right"><a href="beheer.php?id=" class="text-red" style="text-decoration: none;">Back</a></span>
    </form>
</div>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    try {
        $title = $_POST["title"];
        $url = $_POST["url"];
        $year = $_POST["year"];
        $description = $_POST["description"];
        $image = $_POST["image"];
        
        $sql = 'INSERT INTO movie (id, title, url, year, description, image)
                VALUES (NULL, :title, :url, :year, :description, :image)';
        $stmt = $conn->prepare($sql);
        
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':url', $url);
        $stmt->bindParam(':year', $year);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $image);
        
        $stmt->execute();
        $error = '<br>New movie was successfully added';

        header('Location: beheer.php');
  } catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
  }
  echo "<div id='error'>" . $error . '</div>';
}
?>