<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//
interface loginable {
   public function Login ();

   
}

   Class Member implements loginable {

   private $LibraryCardNumber;    
   // We are taking all the information from the parent class, and then just adding in the LibraryCardNumber

   public function __construct($firstName, $secondName, $email, $username, $password, $LibraryCardNumber) {
       $this->LibraryCardNumber = $LibraryCardNumber;
       parent::__construct($firstName, $secondName, $email, $username, $password);
   }

   public function Login() {
       echo "Welcome $this->username";
   }

   public function Logout() {
       echo "You've been logged out $this->username";
   }
   }