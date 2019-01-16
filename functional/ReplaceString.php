<?php
 /**********
  * User Input and Replace String Template “Hello <<UserName>>, How are you?”
  *@authour harikrishna
  *@version 2.0
  *Date 16/01/2019
  */
   //requires method in Utility to take input and find leap year
  
    require('utility.php');
    //give the string to replace
    echo"enter the string \n";
    $str = utility::getString();
    $inputStr = "Hello <<UserName>>, How are you?";
    $str1 = substr($inputStr,6,12);
    $str2 = str_replace($str1,$str,$inputStr);
    echo $str2;
?>