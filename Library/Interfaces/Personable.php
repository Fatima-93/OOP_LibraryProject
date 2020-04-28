<?php

/*
 * Interfaces work in a similar way to abstract classes, in that they declare a consistent set of methods that classes must implement.
 * However, whereas an abstract class has a parent-child relationship with the class that extends it, this relationship doesn;t exist with interfaces.
 * We implement an interface to enforce behaviour.
 * Instead, a class IMPLEMENTS AN INTERFACE. 
 * INTERFACES CAN'T CONTAIN PROPERTIES; THEY CAN ONLY CONTAIN METHOD DECLARATIONS (which can't contain any implementation code).
 * Interfaces allow objects to be polymorphic beyond the constraints of single inheritance.
 * We chose to make this an interface instead of an abstract class, as abstract classes cannot be instantiated - and as we have people
 */


interface Personable {

    //List all the relevant methods for Member and Librarian.
    public function loanItem($numItems);

    public function returnItem($numItems);

    public function searchItem($numItems);

    public function login();

    public function logout();
}

