<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Media;

class CD extends Media implements Loanable {

    Protected $length;
    Protected $rating;

     use Trackdetails;

    public function getTitle() {
        echo "This CD is called " . $this->title;
    }

    public function SetDetails() {
        
    }

    public function loanCost() {
        echo "A CD costs £1.00 to rent"
        ;
    }

    public function showAvailability() {
        echo "This CD is available.";
    }

    public function getMediaByProducer($name) {
        if ($name == $this->By) {
            echo $this->title;
        }
    }

}