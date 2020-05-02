<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


const DB_DSN = 'mysql:host=localhost;dbname=librarydatabasev2';
const DB_USER = 'root';
const DB_PASS = '';

//1.CONNECT
//The script uses PDO to open the database connection, trapping and displaying any error that occurs:
try {
    $connection = new PDO(DB_DSN, DB_USER, DB_PASS); //the creation of a new PHP Data Object - PDO. Assign null to $connection when you're done, to close the connection.
} catch (PDOException $e) {
    die($e->getMessage());
    //or echo "Connection failed: " . $e->getMessage();
}
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//^^Handling errors
//One of the good things about PDO is we can get it to return MySQL errors in the form of highly descriptive PDOException objects.
//Try and catch handles these exceptions easily and deals with them appropriately.
//To set my PDO to to raise exceptions whenever database errors occurs, use the PDO::setAttribute method to set your PDO object's error mode.
//Now you can capture any error that might occur when connecting to the database by using a try..catch code block.
//Try catch code block
//PHP runs the code within the try block.
//If an exception is raised by PDO, the catch block stores the PDOException object in $e, then displays the error message with $e->getMessage();
//For example, if the $password variable in the script contained an incorrect pwd for the user, you'd see an error message appear when you run the script.


