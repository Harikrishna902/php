<?php
/**********
  *Given N distinct Coupon Numbers, how many random numbers do you need to generate distinct coupon number? This program simulates this random process.
  *@authour harikrishna
  *@version 2.0
  *Date 16/01/2019
  */
 //requires method in Utility to take input and find leap year

 require('utility.php');
 echo"enter the number";
 $range = utility::getInt();
 $couponNo = array();
 $totalDistinct = 0;
 for($i=0;$i<$range;$i++){
     $random = rand(1,(100+$range));
     $couponNo[$i] = $random;
     $totalDistinct++;
 }
 $uni = array_unique($couponNo);
 $uni1 =  array_values($uni);
 for($i=0;$i<sizeof($uni1);$i++){
     echo "$uni1[$i]";
  }   
 echo "\n"."taotal distcnt numbers".$totalDistinct."\n";
 ?>

