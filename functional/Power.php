<?php
/**********
*This program takes argument N and prints a table of the powers of 2 that are less 
 than or equal to 2^N.
*@authour harikrishna
*@version 2.0
*Date 16/01/2019
*/

 //requires method in Utility to take input and find leap year
require('utility.php');
echo "enter the number"."\n";
$n = utility::getInt();
echo"power of the number are:";
$pow = pow(2,$n);
for($i=1;$i<=$n;$i++){
    echo pow(2,$i)."\n";
}
?>