<?php
/**********
 *A program with cubic running time. Read in N integers and counts the   number of triples that sum to exactly 0.
 *@authour harikrishna
 *@version 2.0
 *Date 16/01/2019
 */
//requires method in Utility to take input and find the sum
require 'utility.php';
echo "enter the number of elements \n ";
$n = utility::getInt();
utility::distinctTriplets($n);
