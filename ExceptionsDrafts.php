<?php

//FILE TO BE USED MAINLY FOR TESTING EXCEPTIONS


//class TooManyMediaItems extends Exception {
//
//protected $message = "Sorry too many items on loan!!";
//
//}
//
//
//
//class InvalidSearch extends Exception {
//}

//    function checkOutMedia($NoChecked){
//   $total = ($this->NumberOnLoan) + $NoChecked;
//    if ($total < 5){
//    echo "Success! You have checked out $NoChecked items ";
//    }
//    elseif ($total >= 5){
//        throw new TooManyMediaItemsSorry();
//        echo "You are over the limit! Please reduce media amount to continue";
//        
//    }
//}


//$denis = new Librarian("Den", "Smith", "gg@uk.com", 'den02', 'dendog', '2', '66');
//$Jim = new Member('JIM', 'smith', 'jimmie@gmail.com', 'jim01', 'jdog', '3');

//try {
//    $Jim->checkOutMedia("1");
//} catch (TooManyMediaItemsSorry $ex) {
//    echo $ex->getMessage(). PHP_EOL;
//
//}
//try {
//    $Jim->checkOutMedia("6");
//} catch (TooManyMediaItemsSorry $ex) {
// echo PHP_EOL .  $ex->getMessage();
//}
//catch (UknownUser $ex){
//    echo PHP_EOL .  $ex->getMessage();
//}
//try {
//    $Jim->login('jimmie@gmail.com', 'jdog');
//} 
//catch (UnknownUser $ex){
//    echo PHP_EOL .  $ex->getMessage();
//}
//catch (TooManyMediaItemsSorry $ex) {
// echo PHP_EOL .  $ex->getMessage();
//}

//try {
//$Jim->login('j@com', 34, $emailS, $pass);
//} catch (UnknownUser $ex) {
//echo PHP_EOL . $ex->getMessage();
//} catch (TooManyMediaItemsSorry $ex) {
//echo PHP_EOL . $ex->getMessage();
//}
//
//$emailS = "d@com";
//    $pass = '32';
//    
//
//
//class DatabaseException extends Exception {
//
//}
//
//class InvalidInputException extends Exception {
//
//}
//
//try {
//
//} catch (DatabaseException $ex) {
//echo "There was a problem with the database.";
//} catch (InvalidInputException $e) {
//echo "Invalid input = check your typing and try again."
//} catch (Exception $e) {
//echo "Generic error: " . $e->getMessage();
//}




//
//
//    
//    
//    
//    //to close a database connection. Finally is usually used as a clean up code
//    class MyCustomException extends Exception { }
//
//function throwMyCustomException() {
//   throw new MyCustomException('There is something wrong.');
//}
//
//try {
//   throwMyCustomException();
//} catch (MyCustomException $e) {
//   echo "Your custom exception caught ";
//   echo $e->getMessage();
//} catch (Exception $e) {
//   echo "PHP base exception caught";
//} finally {
//  echo "I'm always here";
//}
//Create function with an exception
