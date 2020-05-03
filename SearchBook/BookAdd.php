<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Connection

  $dsn = "mysql:host=localhost;dbname=Libs03";
       $user = "root";
       $password = null;
       $options = null;


try {
    $connection = new PDO($dsn, $user, $password, $options);
   
   //Set the PDO error mode to exception;
   $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   //Prepare sql and bind parameters:
   $stmt = $connection->prepare("INSERT INTO book_table(GenreID, AuthorID, Title, DatePublished, QuantityInStock) VALUES (:GenreID, :AuthorID, :Title, :DatePublished, :QuantityInStock");
   $stmt->bindParam(':GenreID', $GenreID);
   $stmt->bindParam(':AuthorID', $AuthorID);
   $stmt->bindParam(':Title', $Title);
   $stmt->bindParam(':DatePublished', $DatePublished);
   $stmt->bindParam(':QuantityInStock', $QuantityInStock);
   
   
   //set parameters and execute:
   $GenreID = 1;
   $AuthorID = 1;
   $Title = "A book";
   $DatePublished = 2020;
   $QuantityInStock = 1;
   $stmt->execute();

//   
//   echo "New book added  successfully";
//   
//   echo "<h1> Book Information </h1>";
   
   //$statement = $connection->query("SELECT * FROM book_table");
   
//    foreach ($statement as $row) {
//        echo $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3] . " " . $row[4] . " " . $row[5] . "<br>";
//    }
   
}
catch (PDOException $e)
{
   echo "Error: " ;
//           $e->getMesssage();
// 
}

//$connection = null;