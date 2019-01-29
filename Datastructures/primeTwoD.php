<?php
/** 
* program to  Store the prime numbers in a twoD Array
* @author harikrishna
* @version 1.0
*Date: 25/01/2019
***************************************************************************************************/

/**
  * requried to get input from another class
  */

require('utility.php');
require('queue.php');

 /**
  * get prime number 0 to 1000
  */
$arr=utility::primeNumber();

/**
 * array to push the value
 */
$arrtwo=array();
$index=0;
$range=100;
//$arr1=array();
 /**
  * array 0 to 10 because 10 line neened in between 0 to 1000
  */
for($i=0;$i<10;$i++)
{  
    /**
     * array to save the value in inner array
     */
    for($j=0;$j<100;$j++)
    {
        /**
         * if index reach size of array then break or when the value of index 
         *elemnet is greater then $n value break 
         */
        if($index==sizeof($arr)||$arr[$index]>$range)
        {
            break;
        }
        $arrtwo[$i][$j]=$arr[$index++];
     }
      /**
       * after every loop increase by 100
       */
     $range+=100;
     //array_push($arrtwo,$arr1);
}
//print_r($arrtwo);
/**
 * print all anagram of twod array
 */
for($i=0;$i<sizeof($arrtwo);$i++)
{
   for($j=0;$j<sizeof($arrtwo[$i]);$j++)
    {
        echo $arrtwo[$i][$j]." ";
    }
    echo "\n";

}


