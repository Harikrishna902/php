<?php
/**********
  *A program with cubic running time. Read in N integers and counts the   number of triples that sum to exactly 0.
  *@authour harikrishna
  *@version 2.0
  *Date 16/01/2019
  */
 //requires method in Utility to take input and find the sum
require('utility.php');
echo "enter the number of elements \n ";
$n = utility::getInt();
$arr = array();
for($i=0;$i<$n;$i++){
    $arr[$i] = utility::getInt();
}
for($i=0;$i<sizeof($arr);$i++){
    for($j=$i+1;$j<sizeof($arr);$j++){
        for($k=$j+1;$j<sizeof($arr);$k++){
            if(($arr[$i]+$arr[$j]+$arr[$k])==0){
                echo $arr[$i]." ",$arr[$j]." ".$arr[$k];
            }
        }
    }
}
?>

