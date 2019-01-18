<?php
/**********
  *imulates a gambler who start with $stake and place fair $1 bets until he/she goes broke (i.e. has no money) or reach $goal. Keeps track of the number of times he/she wins and the number of bets he/she makes. Run the experiment N times, averages the results, and prints them out.
  *@authour harikrishna
  *@version 2.0
  *Date 16/01/2019
  */
 //requires method in Utility to take input and find leap year
 require('utility.php');
class Gambler{

    /**
     * Function to initiate gambling in the function 
     */
    function gambler(){
        echo"stack should be less than goal\n";
        echo "Enter stack \n";
        $stack =utility::getInt();
        echo "enter goal \n";
        $goal = utility::getInt();
        echo"enter times to play \n";
        $times = utility::getInt();
        utility::gambler($stake,$goal,$times);
    } 
    
}
//Gambler::gamble(); 
$obj = new Gambler();
$obj->gambler();
?>

