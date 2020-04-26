<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//spl_autoload_register(function($className) {
//	$file = $className . '.php';
//	if (file_exists($file)) {
//		include $file;
//	}
//});





spl_autoload_register('myAutoLoader');

function myAutoLoader($classname){
    
    $path= "Classes/";
    $extension= ".Class.php";
        
    $fullpath= $path . $classname . $extension;
    
    if(!file_exists($fullpath)) {
        return false;
    }
    
    include_once $fullpath;
    
}



   $gg = new Media\Book('Harry Potter', 'JK Rowling', '1997', '6h', 'fantasy');

   $gg->getTitle();
    echo "\r\n";
   $gg->getMediaByProducer("JK Rowling");
   echo "\r\n";

    $tt = new Media\Ebook('James and the Giant Peach', 'Roald Dalh', '1988', '5h', 'childrens');
    $tt->getTitle();
   echo "\r\n";


   $TEST3 = new Media\CD('Best of David Bowie', 'David Bowie', '1960', 'pop', '3.00', 'PG');
   $TEST3->getTitle();

  