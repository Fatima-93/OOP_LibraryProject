<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//namespace Media;

Abstract Class Media {

    Protected $title;
    Protected $By;
    Protected $datePublished;
    Protected $genre;
    Protected $loanCost;

    abstract public function getTitle();

    abstract public function setDetails();

    public function getMediaByProducer($name) {
        echo "Function is overridden, if you're seeing this there's a mistake";
    }

}


