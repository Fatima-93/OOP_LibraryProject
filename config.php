<?php

const DB_DSN = "mysql:host=localhost;dbname=libs02";
const DB_USER = "root";
const DB_PASS= "";

try {
    $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
} catch (PDOException $e) {
    
   die($e->getMessage());

}
