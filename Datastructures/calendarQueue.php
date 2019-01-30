<?php
/********q*
 *program for the WeekDay objects to beqstored in a Queue implemented using Linked List.
 *Further maintain also a Week Object in a Queue to finally display the Calendar
 *@authour harikrishna
 *@version 2.0
 *Date 28/01/2019
 ******************************************************************************************/
/*
 * requried to get input from another class
 */
require 'utility.php';
require 'queue.php';
$queue = new queue();
echo "enter the month \n";
$m = utility::getInt();
/**
 * validation for monthnumber
 */
if (($m <= 0) && ($m > 12)) {
    echo "enter valid month number \n";
    $month = utility::getInt();
}
$date = 1;
echo "enter the year  \n";
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
$startday = utility::dayOfWeek($date, $m, $y);
$calender = array();
$days = array('31', '28', '31', '30', '31', '30', '31', '31', '30', '31', '30', '31');
$months = array('Jan', 'Feb', 'March', 'April', 'may', 'June', 'July', 'Aug', 'Sep', 'oct', 'Nov', 'Dec');
$week = array('Sun', 'Mon', 'Tue', 'Wed', 'Th', 'Fri', 'Sat');
/**
 * prints startday of a week
 */
echo $startday . "\n";
if (utility::isLeapy($y)) {
    $days[1] = 29;
}
for ($i = 1; $i <= $days[$m - 1]; $i++) {
    $queue->enqueue($i);
}
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

/*
 * printing the spaces in start and end, according to month we take
 *
 */
for ($i = 0; $i < $startday; $i++) {
    echo "\t";
}
for ($k = 0; $k < $queue->size(); $k++) {
    $value = $queue->peek();
    /*
     * displayes the dates
     */
    echo $queue->dequeueOne() . "\t";
    if (($value + $startday) % 7 == 0) {
        echo "\n";
    }

    //echo "\n";
}
 