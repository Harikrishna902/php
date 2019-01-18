<?php
/**
 *  program WindChill.java that takes two double command-line arguments t and v and prints the wind chill. 
 *  
 * @author harikrishna
 * @version 2.0   
 * @since 16/01/2019
 */
require('utility.php');

    /**
     * computes the wind temperature and returning it by using forumla below
     */
    echo  "enter the temperature  value:";
    $t=utility::getInt();
    echo " enter the wind speed:";
    $v=utility::getInt();
    utility::wind($t,$v);
    
?>
    


