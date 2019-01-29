<?php 
/**********
 * filename:swapnibbles.php
 *function to Swap two nibbles 
 *@authour harikrishna
 *@version 2.0
 *Date 19/01/2019
 *************************************************************************************************/
require('utility.php');
echo"enter the decimal number :\n";
$x =utility::getInt();
echo "decimal number after swapping :\n";
 echo utility::swapNibbles($x);
//echo swapNibbles($x); 
  

?> 