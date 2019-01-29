<?php
/**********
 * filename:bubbleSort.php
 *function to Reads in integers prints them in sorted order using Bubble Sort
 *@authour harikrishna
 *@version 2.0
 *Date 20/01/2019
 ******************************************************************************************/
require ('utility.php');
/**
 * reading from file
 */
$myfile = fopen("hari143.txt", "r") or die("Unable to open file!");
$Str = fread($myfile, filesize("hari143.txt"));
echo $Str;
echo "\n";
$arr = array();
$arr = explode(" ", "$Str");

echo " after sorting the elements are \n";
$output = utility::bubbleSortInt($arr);
print_r($output);
