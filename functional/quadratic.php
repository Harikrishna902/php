<?php
/**********
 * filename:quadratic.php
  *program to find the roots of the equation a*x*x + b*x + c. 
  *@authour harikrishna
  *@version 2.0
  *Date 16/01/2019
  ****************************************************************************/
 //requires method in Utility to take input
 require('utility.php');
 class Quadratic{

    /**
     * Function to calculate the roots and print them on screen.
     */
    function calc(){
        /**
         * getting user input using Utility class
         */
        echo "roots for a*x*x+b*x+c \n";
        echo "enter the values of a,b,c \n";
        $a = utility::getInt();
        $b = utility::getInt();
        $c = utility::getInt();
        /**
         * calling the roots function
         */
        utility::roots($a,$b,$c);
    }
}

//  Quadratic::calc();
$obj = new Quadratic();
$obj->calc();
?>