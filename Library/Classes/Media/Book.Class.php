<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//namespace Media;

class Book extends Media {
    
   protected $readTime;

    use bookDetails;

    public function getTitle() {
        echo "This book title is " . $this->title;
    }

    public function setDetails() {
        
    }

    public function getMediaByProducer($name) {
        if ($name == $this->By) {
            echo "We found a match!! The book you are looking for is called " . $this->title;
        }
    }
}

