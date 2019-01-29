<?php
/**********
 * filename:binarySearch.php
 *function Reads in strings from standard input and prints them in sorted order.
 *Uses insertion sort.
 *@authour harikrishna
 *@version 2.0
 *Date 20/01/2019
 ********************************************************************************/
require ('utility.php');
/**
 * reading from file
 */
$file = fopen("word.txt", "r") or die("file not found");
// echo fgets($file);
$fileString = fgets($file);
// echo $fileString;
$str = explode(" ", "$fileString");
for ($i = 0; $i < sizeof($str); $i++) {
    echo $str[$i] . " ";
}
utility::binarySFile($str);
?>