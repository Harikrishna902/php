<?php
/**********
  *A program with cubic running time. Read in N integers and counts the   number of triples that sum to exactly 0.
  *@authour harikrishna
  *@version 2.0
  *Date 16/01/2019
  */
 //requires method in Utility to take input and find prime factors
 require('utility.php');
 echo "enter the value of n : ";
    $n = utility::getInt();
    $m = $n/2;
    utility::primeFactor($n);
    //calling the function
    //PrimeFactors::primeF();
   // $obj = new PrimeFactors();
    //$obj->primeF();
  ?>