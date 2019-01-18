<?php
 /**********
  * User Input and Replace String Template “Hello <<UserName>>, How are you?”
  *@authour harikrishna
  *@version 2.0
  *Date 16/01/2019
  */
   //requires method in Utility to take input and to replace the string
  
    require('utility.php');
    $String="hello <<username>>,How are you?";
    //give the string to replace
    echo"enter the string to replace: \n";
    $name= utility::getString();
    $String2=str_replace("<<username>>",$name,$String);
    echo $String2."\n";
?>