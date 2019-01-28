<?php
/**
 * program to print prime anagrams using queue in 2d array
 * @author harikrishna
 * @version 1.0
 *Date: 25/01/2019
 ******************************************************************************************************/

 /*
  * requried to get input from another class
  */
 
require 'utility.php';
require 'queue.php';
echo "enter the number \n";

/*
*getting the user input
 */
$number = utility::getInt();
echo "primes numbers between the given range are: \n";

/**
 * printing the prime numbers
 */
$arr = utility::primes($number);
/**
 *calling the function from another class and storing 
 */
$primeAnanagram = utility::printAnagrams($arr);
$queue = new queue;
for($i=0;$i<sizeof($primeAnanagram);$i++){
    $queue->enqueue($primeAnanagram[$i]);
}
echo "\n";
echo "queue prime Anagram\n";
/**
 * displaying the  numbers
 */
$queue->display();
