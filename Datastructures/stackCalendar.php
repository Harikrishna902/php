<?php
/****************************************************************************************
 *program to store the Queue in two Stacks.
 *@authour harikrishna
 *@version 2.0
 *Date 29/01/2019
 ************************************************************************************************/

/*
 * requried to get input from another class
 */
require 'utility.php';
require 'stack.php';
$stack = new Stack();
$stackOne = new Stack();
// $queueWeek = new Queue();
echo "enter month\n";
$m = utility::getInt();
echo "enter year\n";
$y = utility::getInt();

/**
 * validation for monthnumber
 */
if (($m <= 0) && ($m > 12)) {
    echo "enter valid month number \n";
    $month = utility::getInt();
}
$date = 1;
//echo "enter the year  \n";
/**
 * validation for year
 */
$y = utility::getInt();
if ($y < 1000) {
    echo "enter valid year \n";
    $y = utility::getInt();
}
/**
 * calling the date function and assiging to startday
 */
$d0 = utility::dayOfWeek($date, $m, $y);
//$calender = array();
$days = array('31', '28', '31', '30', '31', '30', '31', '31', '30', '31', '30', '31');
$months = array('Jan', 'Feb', 'March', 'April', 'may', 'June', 'July', 'Aug', 'Sep', 'oct', 'Nov', 'Dec');
$week = array('Sun', 'Mon', 'Tue', 'Wed', 'Th', 'Fri', 'Sat');

/*
 * printing the month names
 */
echo "\t\t\t" . $months[$m - 1] . "\t" . $y;
echo "\n";

/*
 * printing the week
 */
for ($j = 0; $j < sizeof($week); $j++) {
    echo $week[$j] . "\t";
}
echo "\n";
/**
 * printing dates
 * -1 bcz months index number has to start from 0 not from 1
 */
for ($j = 1; $j <= $days[$m - 1]; $j++) {
    $stack->push($j);
}
/**
 * poping the elemnets to get in a order manner
 */
for ($k = 0; $k < $stack->size(); $k++) {
    $stackOne->push($stack->pop());
}
/**
 * for printing the spaces 
 */
for ($s = 0; $s < $d0; $s++) {
    echo "\t";
}
/**
 * for printing the elements in next line
 */
for ($i = 0; $i < $stackOne->size(); $k++) {
    $val = $stackOne->peek();
    echo $stackOne->pop() . "\t";
    if (($val + $d0) % 7 == 0) {
        echo "\n";
    }

}
echo "\n";
 