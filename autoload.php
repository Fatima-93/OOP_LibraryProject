<?php

//Registering an autoloader:
//When you try to access a class in your code, PHP first checks if the class is found.
//PHP does it using registered autoloaders. 
//If there are registered autoloaders, PHP will run the first registered autoloader. 
//After running it, PHP will check if the class is now found. 
//If not, PHP will run all the registered autoloaders by the registered order.
//Use namespaces when the class files need to be stored in separate folders


spl_autoload_register('myAutoLoader'); //to register the autoloaded for the classes files
spl_autoload_register('interfaceAutoloader'); //to register this autoloader for the interface files
spl_autoload_register('traitAutoloader'); //to register this autoloader for the trait files
spl_autoload_register('MyClass2Loader');


function myAutoLoader($classname) {

    $path = "Library/Classes/Media/"; //ensure you are loading everything inside the library file structure.
    $extension = ".Class.php";

    $fullpath = $path . $classname . $extension;

    if (!file_exists($fullpath)) {
        return false;
    }

    include_once $fullpath;
}

function myClass2Loader($classname) {

    $path = "Library/Classes/Person/"; //ensure you are loading everything inside the library file structure.
    $extension = ".Class.php";

    $fullpath = $path . $classname . $extension;

    if (!file_exists($fullpath)) {
        return false;
    }

    include_once $fullpath;
}





function interfaceAutoloader($interfacename) {

    $path = "Library/Interfaces/";
    $extension = ".php";

    $fullpath = $path . $interfacename . $extension;

    if (!file_exists($fullpath)) {
        return false;
    }

    include_once $fullpath;
}

function traitAutoloader($traitname) { //the traits must be seperated, in two different files.
    $path = "Library/Traits/";
    $extension = ".php";

    $fullpath = $path . $traitname . $extension;

    if (!file_exists($fullpath)) {
        return false;
    }

    include_once $fullpath;
}

//Loading the classes

$Book1 = new Book('Harry Potter', 'JK Rowling', '1997', '6h', 'fantasy');
echo "\r\n";

$Book1->getTitle();
echo "\r\n";
$Book1->getMediaByProducer("JK Rowling");
echo "\r\n";

$Book2 = new Book('James and the Giant Peach', 'Roald Dalh', '1988', '5h', 'childrens');
$Book2->getTitle();
echo "\r\n";

$CD1 = new CD('Best of David Bowie', 'David Bowie', '1960', 'Pop', '£3.00', 'PG');
$CD1->getTitle();
echo "\r\n";

var_dump(get_included_files());





//Also works:
//spl_autoload_register(function($className) {
//    $fileName = stream_resolve_include_path('Library/Classes/Media/' . $className . '.Class.php');
//    if ($fileName !== false) {
//        include $fileName;
//    }
//});
//spl_autoload_register(function($interName) {
//    $fileName = stream_resolve_include_path('Library/Interfaces/' . $interName . '.php');
//    if ($fileName !== false) {
//        include $fileName;
//    }
//    });
//    spl_autoload_register(function($traitName) {
//    $fileName = stream_resolve_include_path('Library/Traits/' . $traitName . '.php');
//    if ($fileName !== false) {
//        include $fileName;
//    }
//});




