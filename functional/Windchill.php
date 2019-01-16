<?php
/**
 *  program WindChill.java that takes two double command-line arguments t and v and prints the wind chill. 
 *  
 * @author harikrishna
 * @version 2.0   
 * @since 16/01/2019
 */
require('utility.php');
class Windchill{
    /**
     * computes the wind temperature and returning it by using forumla below
     */
    function cal(){
        //getting user input
        echo"enter speed ";
        $ws = utility::getInt();
        echo "enter temperature " ;
        $f = utility::getInt();
        $w = utility::Windchill($temperature,$speed);
        echo "Wind chill is ".$w."\n";

    }
}
//calling cal function to calculate wind chill and print
Windchill::cal();
?>