<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//namespace Media;

class Vinyl extends Media implements Loanable {

    protected $length;
    protected $rating;

    use trackDetails;

    public function getTitle() {
        echo "This Vinyl is called " . $this->title;
    }

    public function setDetails() {
        
    }

    public function getloanCost() {
        echo "A Vinyl costs £5 to rent.";
    }

    public function showAvailability() {
        echo "This Vinyl is available";
    }

    public function getMediaByProducer($name) {
        if ($name == $this->By) {
            echo "We found a match!! We have a Vinyl called $this->title that matches your search";
        }
    }

}