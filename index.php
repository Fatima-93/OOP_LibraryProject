<!DOCTYPE html>


<?php



//include 'nameoffile/autoloader.php';

/*This below needs to go inside a new file called autloader.php - must also go inside a new folder that I must create

spl_auto_register('myAutoLoader'); //we must add the function name here as a string, to know which function we are referencing to.

function myAutoLoader ($className) {
    //$className is a placeholder for whichever class I want to pass in.
    $path = "classes/";
    $extension = ".php" ;
    $fullPath = $path . $className . $extension; //3 variables we are using to create the full path.
   
    if (!file_exists($fullPath)) { //error handler, for incase you make an error.
        return false;
    }
        
    include_once $fullPath;
}
*/

require_once 'Library/LibraryClass.php';

use Library\Person;
use Library\Member;
use Library\Librarian;
use Library\Book;

//OBJECT INSTANCE:
$Person1 = new Person('Jimmy', 'Smith', '04/03/94', 'Jim_04', 'password123');
$Person2 = new Person ('Michael', 'Scott', '06/07/60', 'Scott_02', '321pass');
echo $Person1->getfirstName();
echo "\r\n";
echo $Person1->getUsername();
echo "\r\n";

/*Notes:
*echo $Person1-> getfirstName();  this allows us to access private attributes as it is a public function. 
*var_dump($Person1); prints all the data including the type regardless of the attributes visibility.
*echo $Person1->firstName; this doesnt work if we apply private visibility to the Person1 object --  BUT it does work when the attribute visibility is public.
*/

//OBJECT INSTANCE:
$Member1 = new Member('Fatima', 'Al Ahmad', '24/12/93', 'Fatima1', 'ILoveOOP', 1);
$Member2 = new Member('Lily', 'Smith', '12/02/94', 'Lily_02', 'azsx123', 2);
echo $Member1->Login();
echo "\r\n";
echo $Member1->Logout();
echo "\r\n";

/*Notes:
 * var_dump($Member1); this var_dump returns to us all the values inside $Member1 in the form of an array.
 */

//OBJECT INSTANCE:
$Librarian1 = new Librarian('Fatima', 'Al Ahmad', '24/12/93', 'Fatima1', 'ILoveOOP', 1);
echo $Librarian1->loanBook();
echo "\r\n";
echo $Librarian1->returnBook();


//OBJECT INSTANCE:

$Book1 = new Book('To Kill a Mockingbird', 'Harper Lee', '1960', 'Historical');
echo "\r\n";
echo PHP_EOL;

$Book1->searchBook('To Kill a Mockingbird');
echo "\r\n";



?>
