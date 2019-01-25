<?php
/**
 * program to print prime anagrams using Queue in 2d array
 * @author harikrishna
 * @version 1.0
 *Date: 25/01/2019
 */
require ('utility.php');
require ('Stack.php');
echo "enter the number \n";
//getting the user input
$number = utility::getInt();
echo "primes numbers between the given range are: \n";
//printing the prime numbers
$arr = utility::primes($number);
//printing the prime Anagram numbers
$primeAnagram =utility::printAnagrams($arr);
$Stack=new Stack;
$Stack1=new Stack;
for($i=0;$i<count($primeAnagram);$i++){
    $Stack->push($primeAnagram[$i]);
}
for($i=0;$i<sizeof($primeAnagram);$i++){
   $Stack1->push($Stack->pop());
}
//print_r($arr);
//print_r($primeAnagram);
echo "\n";
echo "Stack prime Anagrams are \n";
//displaying the  numbers
$Stack1->display();
 