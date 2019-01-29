<?php
 /**********
  * filename:dayOfWeek.ph
  *function to find the day of a year
  *@authour harikrishna
  *@version 2.0
  *Date 17/01/2019
  **********************************************************************/
  require('utility.php');       
  class DayOfWeek
  {
       /**
       * staatic main function to take user input of date and test the other function
       */
  
      static function main()
      {
          echo "Enter day number between 1-31:\n";
          $d = utility::getInt();
          echo "Enter month number 1-12: \n";
          $m = utility::getInt();
          echo "Enter year number \n";
          $y = utility::getInt();
          /**
           * calculating the day of week 
           */
          $d0 = utility::dayOfWeek($d, $m, $y);
          /**
           * prints the day week
           */
          $d1 = "Sunday Monday Tuesday Wednesday Thursday Friday Saturday";
          $day = explode(" ", $d1);
          echo "day on given date is " . $day[$d0] . "\n";
      }
  }
  /**
   * calling main funtion to test
   */
  //DayOf::main();
  $obj = new DayOfWeek();
  $obj->main();
  ?>