<?php
 /**********
  * filename:tempConv.php
  *To convert given the temperature in fahrenheit as input outputs the temperature in Celsius or viceversa using the formula
  *@authour harikrishna
  *@version 2.0
  *Date 17/01/2019
  *******************************************************************************************/
  require('utility.php');       
  class TemperatureConversion
  {
       function main(){
        echo "enter temperature \n";
        $temp = utility::getInt();
        echo "enter c or f for given temperature \n";
        $chtemp = utility::getInt();
        $conv =utility::tempConv($temp,$chtemp);
        echo "converted temperature is ".$conv."\n" ;
    }
}
/**
 * calling main function
 */
//TemperatureConversion::mian();
$obj = new TemperatureConversion();
$obj->main();
?>