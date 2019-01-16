<?php
/**********
 * A library for reading in 2D arrays of integers, doubles, or booleans from standard input and printing them out to standard output.
*@authour harikrishna
*@version 2.0
*Date 16/01/2019
*/
 //requires method in Utility to take input and find leap year
 require('utility.php');
 echo "enter number of rows \n";
 $rows =utility::getInt();
 echo "enter number of columns \n";
 $cols = utility::getInt();
 $twoDArr[][] = array();
 for($i=0;$i<$rows;$i++){
    for($j=0;$j<$cols;$j++){
        $twoDArr[$i][$j] =utility::getInt();
    }
}
$arr = array_values($twoDArr);
for($i=0;$i<$rows;$i++){
    for($j=0;$j<$cols;$j++){
        echo $arr[$i][$j]." ";
    }
    echo "\n";
}
// print_r($twoDArr);
?>
 