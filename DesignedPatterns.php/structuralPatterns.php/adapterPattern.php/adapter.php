<?php
/**
 *@fileName:adapter.php
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
//require('socket.php');
interface adapter
{
    public function get120volts();
    public function get3volts();
    public function get12volts();
}

class socketAdapter extends socket implements adapter
{
     /**
     * method overridden to give 120 volts
     */
    public function get120volts()
    {
        return $this->getvolts();
    }
    /**
     * method overridden to give 3 volts
     */
    public function get3volts()
    {
        return $this->getvolts() / 40;
    }
    /**
     * method overridden to give 12 volts
     */
    public function get12volts()
    {
        return $this->getvolts() / 10;
    }

}
