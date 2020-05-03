<?php

const DB_DSN = "mysql:host=localhost;dbname=libs02";
const DB_USER = "root";
const DB_PASS= "";

try {
    $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
} catch (PDOException $e) {
    
   die($e->getMessage());

}

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$stmt = $pdo->query("SELECT * FROM books_table");

try {
    $stmt->execute($_GET);
} catch (PDOException $e) {
echo $e->getMessage();
$error = $e->errorInfo();
die();
}

$rows = $stmt->fetchAll();

$numRows= count($rows);

foreach ($rows as $row) {
    //echo $row[0] . " " . $row[2] . " " . $row[3] . "<br>";
    
   echo $row[2] . "<br>";
}

echo "<h3> Here is a list of our . $numRows . Books </h3>";
    
