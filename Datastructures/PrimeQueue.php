<?php
/**
 * program to print prime anagrams using Queue in 2d array
 * @author harikrishna
 * @version 1.0
 *Date: 25/01/2019
 */
require 'utility.php';
require 'Queue.php';
echo "enter the number \n";
//getting the user input
$number = utility::getInt();
echo "primes numbers between the given range are: \n";
//printing the prime numbers
$arr = utility::primes($number);
//printing the prime Anagram numbers
$primeAnanagram = utility::printAnagrams($arr);
$queue = new Queue;
for($i=0;$i<sizeof($primeAnanagram);$i++){
    $queue->enqueue($primeAnanagram[$i]);
}
echo "\n";
echo "Queue prime Anagram\n";
//displaying the  numbers
$queue->display();
