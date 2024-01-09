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
   <?php
      $sql = 'SELECT * FROM movie WHERE id = ?';
      $stmt = $conn->prepare ($sql);
      $stmt->execute([$_GET['id']]);
      $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
      foreach ($data as $movie) {
    ?>
    
  <div class="container">
    <form class="form" action="" method="post">
        <h1 class="page-title uppercase"><span class="text-red center">E</span>dit movie</h1>
        <br>
        <input type="hidden" name="id" id="id" value="<?php echo $movie[
            'id'
        ]; ?>" />
        <div class="mb-3">
        <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $movie[
                'title'
            ]; ?>" />
        </div>
        <div class="mb-3"> 
            <label for="url" class="form-label">Url:</label>
            <input type="text" class="form-control" id="url" name="url"  value="<?php echo $movie[
                'url'
            ]; ?>" />
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Year:</label>
            <input type="text" class="form-control" id="year" name="year"  value="<?php echo $movie[
                'year'
            ]; ?>" />
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <input type="text" class="form-control" id="description" name="description"  value="<?php echo $movie[
                'description'
            ]; ?>" />
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Upload image:</label>
            <input type="file" class="form-control" id="image" name="image"  value="<?php echo $movie[
                'image'
            ]; ?>" />
        </div>
        
        <br>
        <button type="submit" name="submit" class="btn btn-dark">EDIT movie</button>
        <span class="right"><a href="beheer.php?id=" class="text-red" style="text-decoration: none;">Back</a></span>
    </form>
</div>
<?php }
if (isset($_POST['submit'])) {
$title = $_POST['title'];
$url = $_POST['url'];
$year = $_POST['year'];
$description = $_POST['description'];
$image = $_POST['image'];
$id = $_POST['id'];
  $sql = "UPDATE movie 
            SET title = '$title', url = '$url', year = '$year', description = '$description', image = '$image' 
            WHERE id = '$id'";
  $stmt = $conn->prepare($sql);

  $stmt->execute();
  header('Location: beheer.php');
}
?>
</body>
</html>
