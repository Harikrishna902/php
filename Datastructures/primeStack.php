<?php
/**
 * program to print prime anagrams using Queue in 2d array
 * @author harikrishna
 * @version 1.0
 *Date: 25/01/2019
 ***********************************************************************************************/

/**
 * requried to get input from another class
 */
require 'utility.php';
require 'stack.php';
echo "enter the number \n";

/**
 * getting the user input
 */
$number = utility::getInt();
echo "primes numbers between the given range are: \n";

/**
 * printing the prime numbers
 */
$arr = utility::primes($number);

/**
 * printing the prime Anagram numbers
 */
$primeAnagram = utility::printAnagrams($arr);
$stack = new stack;
$Stack1 = new stack;
for ($i = 0; $i < count($primeAnagram); $i++) {
    $stack->push($primeAnagram[$i]);
}
for ($i = 0; $i < sizeof($primeAnagram); $i++) {
    $Stack1->push($stack->pop());
}
//print_r($arr);
//print_r($primeAnagram);
echo "\n";
echo "stack prime Anagrams are \n";
/**
 * displaying the  numbers
 */
$Stack1->display();
