

<?php

$dsn = "mysql:host=localhost;dbname=Libs03";
$user = "root";
$password = null;
$options = null;

try {
   $conn = new PDO($dsn, $user, $password, $options);
//        //set the PDO error mode to exception
//        //handling errors
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        //prepare sql abd bind parameters
//    $updated = $conn->exec("Update email='hannah@skytech.com' WHERE id= 1");
       $sql = "Update customer_table SET Email = (:Email) WHERE CustomerID= (:CustomerID)";
       //Prepare statement
        $stmt = $conn->prepare($sql);
        
        
       $stmt->bindParam(':Email', $Email);
       $stmt->bindParam(':CustomerID', $CustomerID);
       
  $Email= 'iz@iz.com';
  $CustomerID = 6;
          

   
   
   // execute the query
   $stmt->execute();

   // echo a message to say the UPDATE succeeded
   echo $stmt->rowCount() . " records UPDATED successfully";
   }
catch(PDOException $e)
   {
   echo $sql . "<br>" . $e->getMessage();
   }

$conn = null;
