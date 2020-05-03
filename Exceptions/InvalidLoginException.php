<?php

/*
 *Exceptions  multiple catches:
 */


class InvalidLogin extends Exception {

    protected $email = "member@thelibrary.co.uk";
    protected $message = "Invalid login.";

    public function getValidEmail() {
        return $this->email;
    }
    public function getIdealPass() {
        return $this->password;
    }

}

class PasswordTooWeak extends Exception {

    protected $password = "Azsx123!";
    protected $message = "Password not strong enough.";

    public function getIdealPassword() {
        return $this->password;
    }

}

function login() {
    throw new InvalidLogin();
}

function makeNewPassword() {
    throw new PasswordTooWeak();
}

try {
    login();
} catch (InvalidLogin $e) {
    echo $e->getMessage();
    echo "\r\n";
    echo "This email is not associated with this library. All users registered with the library must have the following email: " . $e->getValidEmail(); 
    echo "\r\n";
} catch (Exception $e) {
    echo "This is the general catch-all catch block";
    echo "\r\n";
    echo $e->getMessage();
}


try {
    MakeNewPassword();
} catch (PasswordTooWeak $e) {
    echo $e->getMessage();
     echo "\r\n";
     echo "This password is too weak. Please ensure your new password has the following characters: " . $e->getIdealPassword();
     echo "\r\n";
} catch (Exception $e) {
    echo "This is the general catch-all catch block";
    echo "\r\n";
    echo $e->getMessage();
}


//function login($email, $password, $emailS, $pass){
//if ($emailS == $email && $pass == $password) {
//echo "We have a match";
//} else {
//throw new UnknownUser();
//}
//


