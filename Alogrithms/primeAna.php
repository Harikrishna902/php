<?php
/**********
 * filename:primeAna.php
 *function Reads in strings from standard input and prints them in sorted order.
 *Uses insertion sort.
 *@authour harikrishna
 *@version 2.0
 *Date 20/01/2019
 */
require 'utility.php';
echo "enter the range ";
echo "\n";
/**
 * calling the method to get int type
 */
$number = utility::getInt(); 
/**
 * calling the function
 */
 
$array = utility::primes($number); 
echo "\n";
 /**
  * calling the function
  */
 utility::palindrome($array);
echo "\n";
/**
 *  calling the method
 */
utility::primeanagrams($array); 
?>