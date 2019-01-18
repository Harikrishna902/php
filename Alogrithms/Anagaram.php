<?php
 /**********
  *function to take user inputs and check the strings are anagrams or not
  *@authour harikrishna
  *@version 2.0
  *Date 17/01/2019
  */
  require('utility.php');       
  class Anagaram{
     static function isAnagram(){
         echo "enter the first string \n";
         //Calling method in utility class to input string
         $s1=utility::getString();
         echo " enter the second string  \n";
         $s2=utility::getString();
         //function in anagram to check for anagram and print result accordingly
            utility::isAnagaram($s1,$s2);
         }
        }
        Anagaram::isAnagram();
        //$obj= new Anagaram();
        //$obj->isAnagram();
  ?>