<?php
/**********
 * filename:insertionSortString.php
 *function Reads in strings from standard input and prints them in sorted order.
 *Uses insertion sort.
 *@authour harikrishna
 *@version 2.0
 *Date 20/01/2019
 ************************************************************************/
require ('utility.php');
$file = fopen("word.txt", "r");
$filestr = fgets($file);
$str = explode(" ", $filestr) or die("file not found");
for ($i = 0; $i < sizeof($str); $i++) {
    echo $str[$i] . " ";
    echo " \n";
}
echo "\n"; 
utility::insertionSortFile($str);



