<?php

/* Traits are PHP's way of adding extra functionality to a class.
 * Traits contain re-usable logic.
 */



trait trackDetails {

   public function __construct($title, $By, $datePublished, $genre, $length, $rating) {
        $this->title = $title;
        $this->By = $By;
        $this->datePublished = $datePublished;
        $this->genre = $genre;
        $this->length = $length;
        $this->rating = $rating;
    }

}