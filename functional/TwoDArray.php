<?php
/**********
 * A library for reading in 2D arrays of integers, doubles, or booleans from standard input and printing them out to standard output.
 *@authour harikrishna
 *@version 2.0
 *Date 16/01/2019
 */
//requires method in Utility to take input and find leap year
require 'utility.php';
echo "enter number of rows \n";
$rows = utility::getInt();
echo "enter number of columns \n";
$cols = utility::getInt();
echo " enter the elements to print \n";
utility::Twoarray($rows, $cols);
