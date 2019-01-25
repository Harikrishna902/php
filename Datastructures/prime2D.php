<?php
/** 
* program to  Store the prime numbers in a 2D Array
* @author harikrishna
* @version 1.0
*Date: 25/01/2019
*/
require('utility.php');
require('Queue.php');
 //get prime number 0 to 1000
$arr=utility::primeNumber();
//array to push the value
$arr2=array();
$index=0;
$range=100;
//$arr1=array();
 //array 0 to 10 because 10 line neened in between 0 to 1000
for($i=0;$i<10;$i++)
{  
    //array to save the value in inner array
    for($j=0;$j<100;$j++)
    {
        //if index reach size of array then break or when the value of index 
            //elemnet is greater then $n value break 
        if($index==sizeof($arr)||$arr[$index]>$range)
        {
            break;
        }
        $arr2[$i][$j]=$arr[$index++];
     }
      //after every loop increase by 100
     $range+=100;
     //array_push($arr2,$arr1);
}
//print_r($arr2);
// print all anagram of 2d array
for($i=0;$i<sizeof($arr2);$i++)
{
   for($j=0;$j<sizeof($arr2[$i]);$j++)
    {
        echo $arr2[$i][$j]." ";
    }
    echo "\n";

}


