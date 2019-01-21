<?php
/**********
 *This program takes argument N and prints a table of the powers of 2 that are less
than or equal to 2^N.
 *@authour harikrishna
 *@version 2.0
 *Date 16/01/2019
 */

//requires method in Utility to take input and find leap year
require 'utility.php';
echo "enter the number" . "\n";
// calling the function to get integer
$number = utility::getInt();
echo "power values are \n";
// calling the function to calculate the powers of 2 of a given number
utility::powersof2($number);
