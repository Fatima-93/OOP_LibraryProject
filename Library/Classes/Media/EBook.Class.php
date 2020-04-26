<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Media;


class Ebook extends Media {

        Protected $readTime;

        use Bookdetails;

        public function getTitle() {
            echo "This Ebook title is called " . $this->title;
        }

        public function SetDetails() {
            
        }

        public function getMediaByProducer($name) {
            if ($name == $this->By) {
                echo "We found a match! The e-book you are looking for is called $this->title";
            }
        }

    }
    
    $Ebook = new Ebook();