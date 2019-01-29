<?php
/** *********************************************************************************************
 * program to  Store the prime numbers  and Anagrams in a 2D Array
 * @author harikrishna
 * @version 1.0
 *Date: 24/01/2019
 ***********************************************************************************************************/

/**
 * requried to get input from another class
 */
require 'utility.php';
require 'linkedList.php';
echo "enter the number \n";
$num = utility::getInt();
$primeArr = utility::primes($num);
$primeAnagram = utility::printAnagrams($primeArr);
$twoDArr = array();
$linkedListOne = new linkedList;
for ($i = 0; $i < sizeof($primeArr); $i++) {
    $linkedListOne->add($primeArr[$i]);
}
for ($i = 0; $i < $linkedListOne->size(); $i++) {
    $j = 0;
    if ($linkedListOne->search($primeAnagram[$i])) {
        $linkedListOne->remove($primeAnagram[$i]);

    } else {

    }

}
$linkedListOne->display();
echo "\n";
/**
 * convering linkedlist to array
 */
$arr = $linkedListOne->llToArr();
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 170; $j++) {
        $twoDArr[$i][$j] = -2;
    }

}
for ($i = 0; $i < sizeof($primeAnagram); $i++) {
    $twoDArr[0][$i] = $primeAnagram[$i];
}
for ($j = 0; $j < sizeof($arr); $j++) {
    $twoDArr[1][$j] = $arr[$j];
}
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < sizeof($primeAnagram); $j++) {
        if ($twoDArr[$i][$j] < 0) {
            echo "\t";
        } else if ($twoDArr[$i][$j] > 0) {
            echo $twoDArr[$i][$j] . " ";
        }

    }
    echo "\n";
}
