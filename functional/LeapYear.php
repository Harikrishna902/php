<?php
 /**********
  *To check given year is leap year or not
  *@authour harikrishna
  *@version 2.0
  *Date 16/01/2019
  */
  //requires method in Utility to take input and find leap year
  require('utility.php');
  class LeapYear{
    function leap(){
        echo"enter the year";
        $year =utility::tygetInt();
        if(strlen((String)$year)==4)
        {
            //calling the function fron Utility class
         if(utility::isLeapyear($year))
           echo "enter the year";
         
           else

            echo "is not a leap year";
        }
               else 
               {
                   echo "enter valid year";
                }
           }
        }
        LeapYear::leap();
        
        
?> 
