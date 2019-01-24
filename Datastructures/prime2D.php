<?php
/** 
* Title: Single linked list
* Description: Implementation of a single linked list in PHP 
* @author harikrishna
* @version 1.0
*Date: 22/01/2019
*/
require('utility.php');
require('Queue.php');
$arr=utility::primeNumber();
$arr2=array();
$index=0;
$number=100;
for($i=0;$i<10;$i++)
{
    $arr1=array();
    for($j=0;$j<100;$j++)
    {
        if($index==sizeof($arr)||$arr[$index]>$number)
        {
            break;
        }
        $arr2[$j]=$arr[$index++];
     }
     $number+=100;
     array_push($arr2,$arr1);
}
for($i=0;$i<sizeof($arr2);$i++)
{
   for($j=0;$j<sizeof($arr2[$i]);$j++)
    {
        echo $arr2[$i][$j]."";
    }
    echo "\n";

}


