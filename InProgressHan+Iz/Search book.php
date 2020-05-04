<?php

const DB_DSN = 'mysql:host=localhost;dbname=Libs03';
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



//                
//                require_once 'FatimaPHP.php';

class SearchBook{
    
    
    
     public function SearchingBook($Firstbit, $connection){
           $sql = "SELECT * 
                      FROM book_table
                      WHERE Title LIKE '$Firstbit%'" ;
             $this->rows = $connection->query($sql);    
         }       
}
             
          $dc = new SearchBook();
//                 $sql = "SELECT * 
//                      FROM book_table
//                      WHERE Title LIKE 'H%'";
          
                // could make this into a method passing a variable in
                   
//                 SearchingBook('H');
                try {
                       
               $dc->SearchingBook('Harry', $connection);
//                    
//                    $rows = $connection->query($sql);

               
                    foreach ($rows as $row) {
                        echo $row ["Title"] ;
                    }
                } catch
                (PDOException $e) {
                    echo "Query failed: " . $e->getMessage();
                }

                echo "</ul>";
                // $connection = null;
                
                ?>
                
                
               