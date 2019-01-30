<?php
/**********
 * filename:mergeSort.php
 * Functions to do Merge Sort of list of Strings.
 *@authour harikrishna
 *@version 2.0
 *Date 22/01/2019
 **************************************************************************************************/
require 'utility.php';
$input = array("h", "a", "r", "i", "k", "r");
$output = utility::mergeSort($input);
echo "elements after sorting \n";
for ($i = 0; $i < sizeof($output); $i++) {
    echo $output[$i] . "   \n";
}
