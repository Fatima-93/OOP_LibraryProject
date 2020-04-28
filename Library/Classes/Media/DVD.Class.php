<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//namespace Media;


Class DVD extends Media implements Loanable {

    Private $length;
    Private $rating;

    Use trackDetails;

    public function getTitle() {
        echo "This DVD is called " . $this->title;
    }

    public function setDetails() {
        
    }

    public function loanCost() {
        echo "A DVD costs £3 to loan.";
    }

    public function showAvailability(){
        echo "This DVD is available.";
    }

    public function getMediaByProducer($name) {
        echo "Function is overridden, if you're seeing this there's a mistake";
    }

}

