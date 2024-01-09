<?php 

include "connection.php";

  $sql = 'DELETE FROM movie WHERE id = ?';
  $stmt = $conn->prepare($sql);
  try {
      $stmt->execute([$_GET['id']]);
      echo "<script>alert('Movie is deleted');
          location.href='beheer.php';</script>";
  } catch (PDOException $e) {
      echo $e->getMessage();
  }   
?>
