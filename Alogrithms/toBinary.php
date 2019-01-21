<?php
/**********
 *function to convert decimal number to binary and again that binary to decimal
 *@authour harikrishna
 *@version 2.0
 *Date 17/01/2019
 */
require 'utility.php';
echo "enter the number \n";
$number = utility::getInt();
utility::toBinary($number);
echo "\n";
//echo "converting binary value into decimal";
//utility::toDecimal($strBinArr)

?>
