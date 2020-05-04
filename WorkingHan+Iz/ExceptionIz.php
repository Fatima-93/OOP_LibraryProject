<?php

//const DB_DSN = "http://localhost/phpmyadmin/db_structure.php?server=1&db=LearningTool";
//const DB_USER = 'root';
//const DB_PASS = '';
//
//
//
//    $Obj = new PDO($DB_DSN, $DB_USER, $DB_PASS);
//    $Obj->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//           
//     $SST = $Obj->prepare("Insert into Customer(FirstName, NoOnLoan) VALUES (:firstname,:NoOnLoan)");    
//     $SST->bindParam(":firstname", $FirstName);
//     $SST->bindParam(":NoOnLoan", $NoOnLoan);
//
//
//
//
//// line 25 is throwing an error :(
//$FirstName = "Jill";
//$NoOnLoan = 2;
//$SST->execute();


// Mockup member class with a checkoutMedia class which throws an exception if the $total no of items
// exceeds 5 items/ 
Class Member {
    protected $name;
    protected $NumberOnLoan;
    protected $email;
    protected $password ;
    
    function __construct($name, $NumberOnLoan, $email, $password){
    $this->name = $name;
    $this->NumberOnLoan = $NumberOnLoan; 
    $this->email = $email;
    $this->password =$password;
}

function checkOutMedia($NoChecked){
   $total = $this->NumberOnLoan + $NoChecked;
    if ($total < 5){
    echo "Success! You have checked out $NoChecked items ";
    }
    elseif ($total >= 5){
        throw new TooManyMediaItemsSorry();
        echo "You are over the limit! Please reduce media amount to continue";
        
    }
}
    function login($email, $password){
    if ($this->email == $email && $this->password == $password) {
            echo "We have a match";
        } else {
            throw new UnknownUser();
        }
    }
}
     




// instansiating a lib member
$Jim = new Member("Jim", "3", "J@gmail.com", "JimmyBoi");
//$sam = new Librarian('sam', '2', 'Sam@sam.com', 'samO');

Class TooManyMediaItemsSorry extends Exception {
    protected $message = "Sorry too many items on loan!!";
    
}

Class UnknownUser extends Exception {
    protected $message = "Your email or password do not work, plz try again";
}


// first attempt goes smoothly as Jim is only borrowing 1 item, hence his grand on loan
// $total = 4 , which is below 5 hence no exception (3 already had + 1 borrowing now)
// MAKING IT WORK
try {
    $Jim->checkOutMedia("1");
} catch (TooManyMediaItemsSorry $ex) {
    echo $ex->getMessage(). PHP_EOL;

}


// Jim has already taken out 3 books so if he tries to take out another 6 this will
// throw him this error.
try {
    $Jim->checkOutMedia('8');
} catch (TooManyMediaItemsSorry $ex) {
 echo PHP_EOL .  $ex->getMessage();
}
catch (UknownUser $ex){
    echo PHP_EOL .  $ex->getMessage();
}
//finally{
//    echo "MATE WHAT HAVE YOU DONE!!";
//}


// MAKING JIM UNABLE TO LOGIN



try {
    $Jim->login('Jdog@gmail.com', 'dgg');
} 
catch (UnknownUser $ex){
    echo PHP_EOL .  $ex->getMessage();
}
catch (TooManyMediaItemsSorry $ex) {
 echo PHP_EOL .  $ex->getMessage();
}

