<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace \Media;

class Book extends Media {
    


   Protected $readTime;

    use Bookdetails;

    public function getTitle() {
        echo "This book title is " . $this->title;
    }

    public function SetDetails() {
        
    }

    public function getMediaByProducer($name) {
        if ($name == $this->By) {
            echo "We found a match!! The book you are looking for is called " . $this->title;
        }
    }
}

trait Bookdetails {

    public function __construct($title, $By, $datePublished, $readTime, $genre) {
        $this->title = $title;
        $this->By = $By;
        $this->datePublished = $datePublished;
        $this->readTime = $readTime;
        $this->genre = $genre;
    }

}


trait Trackdetails {

   public function __construct($title, $By, $datePublished, $genre, $length, $rating) {
        $this->title = $title;
        $this->By = $By;
        $this->datePublished = $datePublished;
        $this->genre = $genre;
        $this->length = $length;
        $this->rating = $rating;
    }

}

   $gg = new Book('Harry Potter', 'JK Rowling', '1997', '6h', 'fantasy');
