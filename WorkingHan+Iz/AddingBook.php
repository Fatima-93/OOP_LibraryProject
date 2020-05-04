<?php
$dsn = "mysql:host=localhost;dbname=Libs03";
$user = "root";
$password = null;
$options = null;

try {
//          
   $conn = new PDO($dsn, $user, $password, $options);
//        //set the PDO error mode to exception
//        //handling errors
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Adding a New Book
   $stmt = $conn->prepare("INSERT INTO book_table(GenreID, AuthorID, Title, DatePublished, QuantityInStock) VALUES (:GenreID, :AuthorID, :Title, :DatePublished, :QuantityInStock)");
   $stmt->bindParam(':GenreID', $genreID);
   $stmt->bindParam(':AuthorID', $authorID);
   $stmt->bindParam(':Title', $title);
   $stmt->bindParam(':DatePublished', $datePublished);
   $stmt->bindParam(':QuantityInStock', $quantityInStock);
   //$stmt->bindParam(':')
   $genreID = 1;
   $authorID = 4;
   $title = "Becoming";
   $datePublished = 2018;
   $quantityInStock = 2;
   $stmt->execute();
//Reading the data
   echo "New Book Created!";
} catch (PDOException $e) {
   echo "Error:" . $e->getMessage();
}