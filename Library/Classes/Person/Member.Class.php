<?php

// * PHP's error handling functions and exception objects, to deal with error conditions gracefully.
// 
// Error handling:
// * Trigger errors yourself in order to make your application more robust, and to ensure it flags up potential problems before they turn into serious ones. 
// * It also means your application can generate more user friendly errors.
// * 
// Exceptions:
// * PHP gives us exceptions, which are a much more elegant way of triggering and handling error conditions. 
// * Rather than returning a single error value, your method or function can create a rich Exception object that includes detailed info about the problem, then throw the object up to the calling code to handle or catch.


class Member implements Library {

protected $firstName;
protected $secondName;
protected $email;
protected $username;
protected $password;
protected $libraryCardNumber;
protected $booksOnLoan;

public function __construct($firstName, $secondName, $email, $username, $password, $libraryCardNumber, $booksOnLoan) {
$this->firstName = $_firstName;
$this->secondName = $secondName;
$this->email = $email;
$this->username = $username;
$this->password = $password;
$this->libraryCardNumber = $libraryCardNumber;
$this->booksOnLoan = $booksOnLoan;

}


public function loanItem($numItems) {
return "Item has been successfully loaned by $this->libraryCardNumber.";
}

//To handle if user exceeds maximum amount of books: 



public function returnItem($numItems) {
return "Item has been successfully returned by $this->libraryCardNumber.";
}


//-E_USER_ERROR - triggered by the script rather than the PHP engine?
public function searchItem($numItems) {

}


public function login() {
return "You are logged out $this->username";
}

public function logout() {
return "You are logged out $this->username";
}
}






