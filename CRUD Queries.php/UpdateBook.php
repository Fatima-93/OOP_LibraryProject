<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$dsn = "mysql:host=localhost;dbname=Libs03";
$user = "root";
$password = null;
$options = null;

try {
    $conn = new PDO($dsn, $user, $password, $options);
 //Set the PDO error mode to exception
 //Handling errors
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
//Prepare SQL and bind parameters
//  $updated = $conn->exec("Update email='hannah@skytech.com' WHERE id= 1");
    $sql = "Update customer_table SET Email = (:Email) WHERE CustomerID= (:CustomerID)";
    
//Prepare statement
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':Email', $Email);
    $stmt->bindParam(':CustomerID', $CustomerID);

    $Email = 'iz@iz.com';
    $CustomerID = 6;

// Execute the query
    $stmt->execute();

// Echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
