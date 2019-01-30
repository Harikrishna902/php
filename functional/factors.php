<?php
/**********
 * filename:factors.php
 *A program with cubic running time. Read in N integers and counts the   number of triples that sum to exactly 0.
 *@authour harikrishna
 *@version 2.0
 *Date 16/01/2019
 *******************************************************************/
/**
 * requires method in Utility to take input and find prime factors
 */
require 'utility.php';
echo "enter the number: \n";
/**
 * calling the function to get integer
 */
$number = utility::getInt();
echo "prime factors of a number are: \n";                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
/**.
 * calling the method to print the primefactors
 */
utility::primeFactors($number);
