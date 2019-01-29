<?php
/************************************************************************************************
 *program -> implemenation of palindromechecker
 *@authour harikrishna
 *@version 2.0
 *Date 24/01/2019
 *********************************************************************************************/

/**
 * requried to get input from another class
 */
require 'utility.php';
/**
 *class containing dequeue and its functions
 */

require 'dequeue.php';
/**
 * creating new dequeue
 */
$deq = new dequeue;
/**
 * taking user input to search
 */
echo "enter the string \n";
$str = utility::getString();
$str1 = str_split($str);

/**
 *adding from rear and displaying forward and
 *chacking simultaneously is they are same or not
 */
for ($i = 0; $i < sizeof($str1); $i++) {
    $deq->addRear($str1[$i]);
}
$deq->displayForward();
echo "\n";
$string = "";
echo "reverse of a taken string \n";

/**
 *removing from back
 */
for ($i = 0; $i < sizeof($str1); $i++) {
    $string = $string . $deq->removeRear();
}
echo $string . "\n";
/**
 * comparing both the strings
 */
if ($str == $string) {
    echo "String is palindrome \n";
    echo "true \n";
} else {
    echo "String is not palindrome \n";
    echo "false \n";
}
