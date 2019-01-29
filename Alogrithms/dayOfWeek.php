<?php
 /************************************************************************
  *filename:dayOfWeek.ph
  *function to find the day of a year
  *@authour harikrishna
  *@version 2.0
  *Date 17/01/2019
  **************************************************************************************************/
require ('utility.php');
$weeks = array('Sunday', 'Monday', 'Tuesday', 'Wednessday', 'Thursday', 'Friday', 'saturday');
$days =array('31','28','31','30','31','30','31','31','30','31','30','31');
/**
 * function to read year and month 
 */
echo "enter date of a month \n";
$date = utility::getInt();
echo "enter month number \n";
$month = utility::getInt();
echo "enter year \n";
$yr = utility::getInt();
if(utility::isLeapy($yr)){
    $days[1] = 29;
}
if(($month<=12&&$month>=1)&&($yr>=1000&&$yr<=9999)&&($date<=$days[$month-1]&&$date>=1)){
/** 
 * function to get day for year and month 
 */
$day = utility::dayOfWeek($date, $month, $yr);
echo $weeks[$day];
}else{
    echo "invalid date  or year or month \n";
}
?>