<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Librarian extends Member implements Personable { //this class will inherit properties from Member, as well as implement the Personable interface

    private $staffNumber; 

    public function __construct($firstName, $secondName, $email, $username, $password) {
        $this->staffNumber = $staffNumber;
        parent::__construct($firstName, $secondName, $email, $username, $password);
    }

    public function loanItem($numItems) {
        return "Item loan has been successfully processed by staff member $this->staffNumber.";
    }

    public function returnItem($numItems) {
        return "Item return successfully processed by staff member $this->staffNumber.";
    }

    public function searchItem($numItems) {
        
    }

    public function login() {
        if ($username == $this->username) {
            return "You are logged in $this->staffNumber";
        } else {
            return "Please enter your username";
        }
    }

    public function logout() {
        return "You are logged out $this->staffNumber.";
    }

    public function addMember($newuser) {
        return "$newuser has now been added.";
        
    }

    public function removeMember($username) {
        return "this->$username has now been removed.";
    }

    public function contactMember() {
        
    }

}



