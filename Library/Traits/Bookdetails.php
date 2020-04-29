<?php

/* 
 * Traits are PHP's way of adding extra functionality to a class.
 * Traits contain re-usable logic.
*/


Trait bookDetails {

    public function __construct($title, $By, $datePublished, $readTime, $genre) {
        $this->title = $title;
        $this->By = $By;
        $this->datePublished = $datePublished;
        $this->readTime = $readTime;
        $this->genre = $genre;
    }

}
