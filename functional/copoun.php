<?php
/**********
  *Given N distinct Coupon Numbers, how many random numbers do you need to generate distinct coupon number? This program simulates this random process.
  *@authour harikrishna
  *@version 2.0
  *Date 16/01/2019
  */
 //requires method in Utility to take input and find copoun number

 require('utility.php');
 echo"enter the number \n";
 $range = utility::getInt();
 $couponNo = array();
 $totalDistinct = 0;
 for($i=0;$i<$range;$i++){
     $random = rand(1,($range));
     $couponNo[$i] = $random;
    
 }
 $uni = array_unique($couponNo);
 $uni1 =  array_values($uni);
 $totalDistinct = sizeof($uni1);
 for($i=0;$i<sizeof($uni1);$i++){
     echo "$uni1[$i] \n";
  }   
 echo "\n"."total distcnt numbers \n".$totalDistinct;
 ?>

