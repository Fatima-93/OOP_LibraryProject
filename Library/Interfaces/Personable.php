<?php

/*
 * Interfaces work in a similar way to abstract classes, in that they declare a consistent set of methods that classes must implement.
 * However, whereas an abstract class has a parent-child relationship with the class that extends it, this relationship doesn;t exist with interfaces.
 * We implement an interface to enforce behaviour.
 * However, whereas an abstract class has a parent-child relationship with the class that extends it, this relationship doesn;t exist with interfaces.
 * Instead, a class IMPLEMENTS AN INTERFACE. 
 * INTERFACES CAN'T CONTAIN PROPERTIES; THEY CAN ONLY CONTAIN METHOD DECLARATIONS (which can't contain any implementation code).
 * Interfaces allow objects to be polymorphic beyond the constraints of single inheritance.

 */

include 'autoload.php';

interface Personable {

    //List all the relevant methods for Member and Librarian.
    public function loanItem($numItems);

    public function returnItem($numItems);

    public function searchItem($numItems);

    public function login();

    public function logout();
}

