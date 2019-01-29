<?php
/**********
 * filename:stopWatch.php
  *for measuring the time that elapses between the start and end clicks
  *@authour harikrishna
  *@version 2.0
  *Date 17/01/2019
  ***********************************************************************************************/
 /**
  * requires method in Utility to take input
  */
 require('utility.php');
 class Stopwatch{
     static $start;
     static $stop;
     static function start(){

         /**
          * using static bcz Static functions and variables are referenced via self::functionName() or self::variableName
          *if it is non static we can use 'this->'
           */  
         self::$start=round(microtime(true)*1000);
     }
     static function stop(){
         self::$stop=round(microtime(true)*1000);
    }
     static function elapsed(){
         return "Time :".((self::$stop-self::$start)/1000)." seconds \n";
     }
     /**
     * Function to Store end clicktime and start click time and print elapsed time
     */
         function Watch(){
         echo "StopWatch \n";
         echo "enter 1 to start \n";
         $i=fgets(STDIN);
         /**
          * gets start time
          */
         $start=round(microtime(true)*1000);
         echo "enter 2 to stop \n";
         $i=fgets(STDIN);
         /**
          * gets stop time
          */
         $stop=round(microtime(true)*1000);
         /**
          * print elaspsed time
          */
         echo self::elapsed();
     }
 }
 Stopwatch::Watch(); 
 ?>