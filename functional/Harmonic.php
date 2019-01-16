<?php
/**********
  * Prints the Nth harmonic number: 1/1 + 1/2 + ... + 1/N 
  *@authour harikrishna
  *@version 2.0
  *Date 16/01/2019
  */

 //requires method in Utility to take input and find leap year
 require('utility.php');

class Harmonic
{

    /**
     * function to find and print the harmonic no 
     */
    function getHarmonic()
    {
        echo "enter the harmonic number \n";
        $value =utility::getInt();
        $harmonic = 0.0;
        for ($i = 1; $i <= $value; $i++) {
            $harmonic =$harmonic +(1.0/$i);
        }
        if($value>0){
        echo "the " . $value . "th harmonic number is " . $harmonic . "\n";
        }
        else{
            echo" number should be greater than zero \n";
        }
    }
}
Harmonic::getHarmonic();

?>