<?php
 /**********
  *filename:sqrt.php
  *function to take user inputs and check the strings are anagrams or not
  *@authour harikrishna
  *@version 2.0
  *Date 17/01/2019
  ***********************************************************/
  require('utility.php');       
  class NewtonSqrt{

    /**
     * main Function to test the program
     */
    static function main(){
        /**
         * getiing user input
         */
        echo "enter no for square root ";
        $n = utility::getInt();
        /**
         * calculating sqr root by passing $n to sqrt function
         */
        $sqrt = utility::sqrt($n);
        echo "Square root is ".$sqrt."\n";
    }
}
/**
 * calling main function to test the class
 */
//NewtonSqrt::main();
$obj = new NewtonSqrt();
$obj->main();
?>