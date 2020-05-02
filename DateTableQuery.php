
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <h4>Dates Table <h4>

                <?php
               require_once 'PDOConnection.php';
                
         
                $sql = "SELECT * FROM date_table"; //the sql query is created and stored in a string variable, $sql. This query simply extrats all the data from date_table.

                echo "<ul>";
//The main part of the script runs the query, and loops through the returned rows of data, displaying the contents of each row in an HTML li element.
//Both the call to connection->query and the looping code is within a try block to catch any exceptions that might be caused by running the query. 
//If an exception is thrown, it is handled by the catch block, which displays the message "Query failed" along with the error message.
                try {
                    $rows = $connection->query($sql);

                    foreach ($rows as $row) {
                        echo "<li> Order number " . $row ["OrdersID"] . " has been borrowed on " . $row ["DateTakenOut"] . ".  It has been returned on " . $row ["DateReturned"] . " . The number of days it is overdue is " . $row ["NumberDaysOverdue"] . ". The fine is " . $row ["Fine"] . "</li>";
                    }
                } catch
                (PDOException $e) {
                    echo "Query failed: " . $e->getMessage();
                }

                echo "</ul>";
                // $connection = null;
                ?>
                </body>
                </html>
