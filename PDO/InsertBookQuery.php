<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Connection
const DB_DSN = 'mysql:host=localhost;dbname=librarydatabasev2';
const DB_USER = 'root';
const DB_PASS = '';


try {
    $connection = new PDO(DB_DSN, DB_USER, DB_PASS);
    //Set the PDO error mode to exception;
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //Prepare SQL query and bind parameters:
    $stmt = $connection->prepare("INSERT INTO book_table (GenreID, AuthorID, Title, DatePublished, QuantityInStock) VALUES (:GenreID, :AuthorID, :Title, :DatePublished, :QuantityInStock");
    $stmt->bindParam(':GenreID', $GenreID);
    $stmt->bindParam(':AuthorID', $AuthorID);
    $stmt->bindParam(':Title', $Title);
    $stmt->bindParam(':DatePublished', $DatePulished);
    $stmt->bindParam(':QuantityInStock', $QuantityInStock);
    
    
    //Setting the parameters and executing:
    $GenreID = "2";
    $AuthorID = "1";
    $Title = "A book";
    $DatePulished = "2020";
    $QuantityInStock = "1";
    $stmt->execute();

    
    echo "New book added  successfully";
    
    echo "<h1> Book Information </h1>";
    
    $statement = $connection->query("SELECT * FROM book_table");
    
    foreach ($statement as $row) {
        echo $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3] . " " . $row[4] . " " . $row[5] . "<br>";
    }
    
} 
catch (PDOException $e) 
{
    echo "Error: " . $e->getMesssage();
   
}

$connection = null;