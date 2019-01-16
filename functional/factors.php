<?php
/**********
  *A program with cubic running time. Read in N integers and counts the   number of triples that sum to exactly 0.
  *@authour harikrishna
  *@version 2.0
  *Date 16/01/2019
  */
 //requires method in Utility to take input and find leap year
 require('utility.php');
 class PrimeFactors{
     //checks the no if its divisible by a prime no or not
     function primeF(){
         echo "Enter the number : ";
         $num = utility::getInt();
         echo "prime factors are \n";
         for($i=0;$i<$num;$i++){
             while($num%$i==0){
                {
                    echo ($i+" ");
                    $num=$num/2;
                    
                }
                if($num>2)
                {
                    echo"$num";
                }
        }
         }
        }
    }
    //calling the function
    PrimeFactors::primeF();
  ?>     