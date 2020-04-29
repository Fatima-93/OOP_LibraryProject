<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//namespace Media;


Class Ebook extends Media {

        Protected $readTime;

        Use bookDetails;

        public function getTitle() {
            echo "This Ebook title is called " . $this->title;
        }

        public function setDetails() {
            
        }

        public function getMediaByProducer($name) {
            if ($name == $this->By) {
                echo "We found a match! The e-book you are looking for is called $this->title";
            }
        }

    }
    
