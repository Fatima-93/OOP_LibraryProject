<?php


include 'autoload.php';

Class TooManyMediaItemsSorry extends Exception {
    protected $message = "Sorry too many items on loan!!";
    
}

Class UnknownUser extends Exception {
    protected $message = "Your email or password do not work, plz try again";
}

//$denis = new Librarian("Den", "Smith", "gg@uk.com", 'den02', 'dendog', '2', '66');

$Jim = new Member('JIM', 'smith', 'jimmie@gmail.com', 'jim01', 'jdog', '3');

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

try {
    $Jim->login('j@com', 34, $emailS, $pass);
} 
catch (UnknownUser $ex){
    echo PHP_EOL .  $ex->getMessage();
}
catch (TooManyMediaItemsSorry $ex) {
 echo PHP_EOL .  $ex->getMessage();
}



