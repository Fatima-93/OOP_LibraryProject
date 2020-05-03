<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Member implements Personable {

    private $_firstName;
    private $_secondName;
    private $_email;
    private $_username;
    private $_password;
    private $_LibraryCardNumber;
    private $NoOnLoan;

      public function __construct($firstName, $secondName, $email, $username, $password, $NoOnLoan) {
        $this-> firstname = $firstName ;
         $this-> secondName = $secondName ;
          $this-> email = $email ;
           $this-> username = $username ;
            $this-> firstname = $firstName ;
            $this-> NoOnLoan = $NoOnLoan;
            
      }

    
    
    
    public function loanItem($numItems) {
        return "Item has been successfully loaned by $this->_LibraryCardNumber.";
    }

    public function returnItem($numItems) {
        return "Item has been successfully returned by $this->_LibraryCardNumber.";
    }

    public function searchItem($numItems) {
        
    }

   
    public function logout() {
        return "You are logged out $this->_username.";
    }
   
    function checkOutMedia($NoChecked){
   $total = ($this->NumberOnLoan) + $NoChecked;
    if ($total < 5){
    echo "Success! You have checked out $NoChecked items ";
    }
    elseif ($total >= 5){
        throw new TooManyMediaItemsSorry();
        echo "You are over the limit! Please reduce media amount to continue";
        
    }
}


//function login($email, $password){
//    if ($this->email == $email && $this->password == $password) {
//            echo "We have a match";
//        } else {
//            throw new UnknownUser();
//        }
//    }
    
    function login($email, $password, $emailS, $pass){
    if ($emailS == $email && $pass == $password) {
            echo "We have a match";
        } else {
            throw new UnknownUser();
        }
    }
    

    }



    
    $emailS = "d@com";
    $pass = '32';