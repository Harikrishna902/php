<?php
/**********
  *function to print the primenumbers
  *@authour harikrishna
  *@version 2.0
  *Date 17/01/2019
  */
  require('utility.php'); 
 echo "enter to number to find primes:";
 $number=utility::getInt();
$array2= utility::primes($number);

?>