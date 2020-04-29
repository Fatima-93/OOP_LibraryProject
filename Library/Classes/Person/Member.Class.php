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

    public function loanItem($numItems) {
        return "Item has been successfully loaned by $this->_LibraryCardNumber.";
    }

    public function returnItem($numItems) {
        return "Item has been successfully returned by $this->_LibraryCardNumber.";
    }

    public function searchItem($numItems) {
        
    }

    public function login() {
        return "You are logged in $this->_username.";
    }

    public function logout() {
        return "You are logged out $this->_username.";
    }
   

    }


