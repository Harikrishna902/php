<?php
/** 
* program to  Store the prime numbers  and Anagrams in a 2D Array
* @author harikrishna
* @version 1.0
*Date: 24/01/2019
*/
require('utility.php');
require('LinkedList.php');
echo " enter the number \n";
$num=utility::getInt();
$arr=utility::primes($number);
$primeAnagram = utility::printAnagrams($arr);
$arr2=array();
$LinkedList1=new LinkedList;
for($i=0;$i<sizeof($arr);$i++)
{
    $LinkedList1->add($arr[$j]);
}
for($i=0;$i<$linkedList1->size();$i++){
    $j=0;
    if($linkedList1->search($primeAnagram[$i])){
        $linkedList1->remove($primeAnagram[$i]);
        $j++;
    }
    else{
        $j--;
    }
    
}
