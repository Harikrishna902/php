<?php
/**********
 * filename:copoun.php
 *Given N distinct Coupon Numbers, how many random numbers do you need to generate distinct coupon number? This program simulates this random process.
 *@authour harikrishna
 *@version 2.0
 *Date 16/01/2019
 */
//requires method in Utility to take input and find copoun number

require 'utility.php';
echo "enter the number \n";
$range = utility::getInt();
utility::copounnumber();
