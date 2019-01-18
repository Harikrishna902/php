<?php
 /**********
  *Function to calculate monthlyPayment using p,r,
  *@authour harikrishna
  *@version 2.0
  *Date 17/01/2019
  */
  require('utility.php');
  class MonthlyPayment{
     /**
      * function to test the function
      */
       function pay(){ 
        echo "enter principal value";
        $p = Utility::getInt();
        echo "enter no of years ";
        $y = utility::getInt();
        echo "enter rate of interest ";
        $r0 = utility::getInt();
        utility::monthlyPayment($p,$r,$R);
        }
      }
      //MonthlyPayment::main();
      $obj = new MonthlyPayment();
      $obj->pay();
?>

  
  