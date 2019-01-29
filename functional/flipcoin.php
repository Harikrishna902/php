<?php
 /**********
  * filename:flipcoin.php
  *Program to flip the coin desired times  and show results
  *@authour harikrishna
  *@version 2.0
  *Date 16/01/2019
  ************************************************************************/
  /**
   * requires method in Utility to take input and find flips of
   */

  require('utility.php');
  echo"enter no of trails to flip the coin \n";

 /**
  * var n to store no times to flip
  */
 $times = utility::getInt();

 /**
  * passing variable to the method
  */
  utility::flip($times);
?>
  
  