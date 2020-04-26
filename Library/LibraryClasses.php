<?php

/*OOP
 * You write more lines of code, but the code is much easier to maintain and you will end up saving a lot of time in the process. Optimize your code for reading, not writing.
 * The point of OOP is not lines of code, it is about maintainability, testability and extensibility. Your procedural code will be harder to test, extend and maintain.
 * OOP is more to do with structure / design of your code and classes, appropriate visibility and encapsulation.
 * How to ensure classes are self-contained with encapsulation: make properties private. If outside code needs to access them, it should be done via public methods. This gives your class the oppourtinity to validate the changes requested by the outisde code and accept or reject them.
 * $this enables us to access an object's property from within a method of the same object.
 * 
 * Visibility:
 * Best practice is to encapsulate as much as possible by using  private
 * Provide public methods for external access where necessary e.g. getName, setName
 * The ideal class is immutable
-everything set in the constructor
-none of its values may be changed (i.e. no setters, only getters)
-immutable values are easier to track, debug and pass around

 */

namespace Library;

// This is the parent class.
Class Person {

// Visibility chosen is protected due to the sensitive nature of the attributes such as names.
protected $firstName;
protected $secondName;
protected $DOB;
protected $username;
private $_password; //underscore for private properties is a common coding practice.

// The constructor allows us to pass different arguments inside the function. This allows us to pass in arguments into the new object instances, rather than hard coding values to firstName and secondName.
public function __construct($firstName, $secondName, $DOB, $username, $password) {
$this->firstName = $firstName;
$this->secondName = $secondName;
$this->DOB = $DOB;
$this->username = $username;
$this->password = $password;
}

// As our properties have private visibility, we need a public method in order to access the name property from outside the class.
public function getfirstName() { //this is an example of one getter.
return "$this->firstName is a library member."; //
}

public function getUsername(){
    return "Welcome Jimmy. $this->username is your username.";
}

}

//This is the Member class, which we made inherit the same attributes as the Person class. 
Class Member extends Person {

private $LibraryCardNumber; //the new additional attribute for this class.

public function __construct($firstName, $secondName, $DOB, $username, $password, $LibraryCardNumber) {  // We bring in the attributes from the parent class, and then adding in the new attribute.  
$this->LibraryCardNumber = $LibraryCardNumber; //setting the new attribute.
parent::__construct($firstName, $secondName, $DOB, $username, $password); //this parent::  refers to the parent class, and passes the original arguments in that class. This is how to inherit from a parent class.
}

public function Login() {
return "You are logged in $this->username.";
}

public function Logout() {
return "You've been logged out $this->username.";
}

}

//This is the librarian class, which we made inherit the same attributes as those in the parent class.
class Librarian extends Person {

private $staffNumber; //the new unique attrbiute to this class.

public function __construct($firstName, $secondName, $DOB, $username, $password, $staffNumber) {
$this->staffNumber = $staffNumber;
parent::__construct($firstName, $secondName, $DOB, $username, $password);
}

public function loanBook() {
return "Book loan successfully processed by staff member $this->staffNumber."; 
}

public function returnBook() {
return "Book return has been successfully processed by staff member $this->staffNumber.";
}

public function contactMember() {
return $this->staffNumber;
}

}

//This is the book class. 
Class Book {

    private $bookTitle; 
    private $author;
    private $datepublished;
    private $genre;

    public function __construct($bookTitle, $author, $datepublished, $genre) {
        $this->bookTitle = $bookTitle;
        $this->author = $author;
        $this->datepublished = $datepublished;
        $this->genre = $genre;
    }
    
    public function getbookTitle()  {
        return $this->bookTitle;
    }

    public function searchBook($book) { 
        if ($book == $this->bookTitle) {

            echo "Your book is here!";
        } else {
            echo "Book not found, please try again.";
        }
    }
    
    public function UpdatingDetails($password, $pass, $cor){
    if ($password == $pass){
        echo PHP_EOL . "You are in, please enter the value you would like to change this to" . PHP_EOL;
        $numberone = stream_get_line(STDIN, 100, "\n");
        $this->$cor = $numberone ;
        if ($numberone != null) {
            echo "You are updating the book property **$cor** with the value of **$numberone**";
        }
}    
    else{
        PHP_EOL . die ("Sorry, wrong password!! try again");
    }  
}


}



