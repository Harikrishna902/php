<?php
/**********
 * filename:gamblar.php
 *imulates a gambler who start with $stake and place fair $1 bets until he/she goes broke (i.e. has no money) or reach $goal. Keeps track of the number of times he/she wins and the number of bets he/she makes. Run the experiment N times, averages the results, and prints them out.
 *@authour harikrishna
 *@version 2.0
 *Date 16/01/2019
 **************************************************************************/
/**
 * requires method in Utility to take input and find leap year
 */
require 'utility.php';
echo "enter the stake value :\n"; 
/**
 * calling the method to get integer value
 */
$stake=utility::getInt(); 
echo "enter the goal value :\n";
/**
 * calling the method to get integer value
 */
$goal=utility::getInt();
echo "enter the number of trials :\n";
$trials=utility::getInt();
utility::gambler($stake,$goal,$trials); 
?>