<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//namespace Media;

abstract class Media {

    protected $title;
    protected $by;
    protected $datePublished;
    protected $genre;
    protected $loanCost;

    abstract public function getTitle();

    abstract public function setDetails();

    public function getMediaByProducer($name) {
        echo "Function is overridden, if you're seeing this there's a mistake";
    }

}


