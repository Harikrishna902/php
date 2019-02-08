<?php
/**
 *@fileName:socket.php
 *@Desc:implementing adapter design pattern by taking to create a mobileCharging as example
 *that can Produce PC, Laptop and Server Class Computers
 *@author harikrishna
 *@version 1.0
 *Date: 7/02/2019
 *********************************************************************************************/
/**
 * top level exception handler function to handle exception
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
});
/**
 * class socket to act as the class with 1 method
 */
class socket
{
    function getVolts()
    {
        return 120 ;
    }
}
?>