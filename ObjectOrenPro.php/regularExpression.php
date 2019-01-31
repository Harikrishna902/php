<?php
/******************************************************************************************
 *@filename:regularExpression.php
 *@Desc:Read in the  message and replace with regex
 *@authour harikrishna
 *@version 2.0
 *Date 30/01/2019
 *********************************************************************************************/
require 'utility.php';
//string to hold the original string to display
$string = "Hello <<name>>, We have your full name as <<full name>> in our system
your contact number is 91-xxxxxxxxxx
Please,let us know in case of any clarification Thank you \n BridgeLabz xx/xx/xxxx";
echo "enter first name \n";
$name = utility::getString();
echo "enter full name \n"; 
$fname = utility::getString();
echo "enter mobile number \n";
//$mobileNumber = utility::getInt();
//validation for mobilenumber
while(strlen($mobileNumber=utility::getInt())<10) {
   echo "Enter correct Mobile number\n";
}
//replacing mobilenumber using regex
$string = preg_replace("/\d{2}\-x+/", $mobileNumber, $string);
//replacing <<name>> using regex
$string = preg_replace("/<+\w{4}>+/", $name, $string);
//replacing <<fullname>> using regex
$string = preg_replace("/<+\w+\s\w+>+/", " " . $fname, $string);
//replacing todays date with current date
$string = preg_replace("/x*\/x*\/x*/", date("d/m/Y"), $string);
echo "$string";
