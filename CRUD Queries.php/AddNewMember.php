<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$dsn = "mysql:host=localhost;dbname=librarydatabasev2";
$user = "root";
$password = null;
$options = null;

try {
    $conn = new PDO($dsn, $user, $password, $options);
    
//Set the PDO error mode to exception
//Handling errors
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//$sql = "INSERT INTO customer_table(FirstName, LastName, Email, PhoneNumber,AddressID, CustomerID)
//VALUES ('John', 'Doe', 'john@example.com', '44', '3', '6')";

//$conn->query($sql)  ;
     
//Prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO customer_table(FirstName, LastName, Email, PhoneNumber, AddressID) VALUES(:firstname, :lastname, :email, :phoneNumber, :addressID)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phoneNumber', $phoneNumber);
    $stmt->bindParam(':addressID', $addressID);
  //$stmt->bindParam(':')
    $firstname = 'Jonnie';
    $lastname = "Doe";
    $email = "JD@gmail.com";
    $phoneNumber = 0711122;
    $addressID = 4;
    $stmt->execute();

//Reading the data
//       echo "New Member Created!";
//       $statment = $conn->query("SELECT*FROM customer_table");
//       foreach ($statement as $row){
//        echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4].PHP_EOL;
//       }
//       }
} catch (PDOException $e) {
    echo "Error:" . $e->getMessage();
}

       