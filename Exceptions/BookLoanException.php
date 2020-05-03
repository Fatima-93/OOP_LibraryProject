<?php

/* Exceptions with multiple catches
 * 
 *
 * 
 */

class ExceededMaxLoan extends Exception {
   
  private $maxBookAmount = 10;
  protected $message = "Exceeded total maximum book loan limit.";
            
    public function getMaxBookAmount () {
           return $this->maxBookAmount;
    }
}

class MaxItemsPerDay extends Exception {
    private $itemLimit = 3;
    protected $message = "Exceeded maximum loan limit per day.";
        
public function getItemLimit(){
return $this->itemLimit;
}
}

//One try catch
function loanItem() {
throw new ExceededMaxLoan();
throw new MaxItemsPerDay();
}

try {
    loanItem();
}
catch (ExceededMaxLoan $e) {
    echo $e->getMessage();
    echo "\r\n";
    echo "The maximum number of books you can have on loan is " . $e->getMaxBookAmount(); 
}
catch (MaxItemsPerDay $e) {
    echo $e->getMessage();
    echo "\r\n";
    echo "The maximum number of books you can loan per day is " . $e->getItemLimit();
}
catch (Exception $e) {
    echo "\r\n";
    echo "This is the general catch-all block";
}





//function loanItem($booksOnLoan){throw new ExceededMaxLoan ();}
//
//try {
//    loanItems();
//    if ($booksOnLoan>10) {
//      echo "The maximum number of books you can loan is 10.";
//    }
//    catch (ExceededMaxLoan $e) {   
//        echo $e->getMessage;
//    }
//    try {
//        loanItem(10);
//        echo "You can only loan 1 book per day. Please select one book to loan."
//    
//    }
//    catch (Exception $e) {
//        echo 'Message: ' .$e->getMessage();
//    }
//}


