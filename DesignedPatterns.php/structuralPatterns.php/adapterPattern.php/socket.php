<?php
/**
 *@fileName:socket.php
 *@Desc:implementing adapter design pattern by taking to create a mobileCharging as example
 *@author harikrishna
 *@version 1.0
 *Date: 8/02/2019
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