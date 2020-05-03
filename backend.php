<?php
require_once('config.php');

   $id  = trim($_GET["id"]);
      
  $stmt = $pdo->query("SELECT * FROM books_table where id= :id");
  
    $stmt->bindParam(':id', $id);

try {
    $stmt->execute($_GET);
} catch (PDOException $e) {
echo $e->getMessage();
$error = $e->errorInfo();
die();
}

  $stmt->execute();

$rows = $stmt->fetchAll();

echo json_encode($rows);

$numRows= count($rows);

$pdo= null;
 