<?php
/**
 *@fileName:mobilecharging.php
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
require 'socket.php';
require '/home/admin1/workspace/Harikrishna/DesignedPatterns.php/utility.php';
require 'adapter.php';

/**
 * class mobile to create mobile object
 */
class Mobile
{
    //variable to store the charging voltage of the mobile
    private $cvolt;
    /**
     * constructor of the mobile
     */
    public function __construct(int $volt)
    {
        $this->cvolt = $volt;
    }
    /**
     * function to print charge the mobile if correct voltage is provided
     */
    public function charge(int $volt)
    {
        /**
         * charge the mobile if voltage and the required volts for  charging are same
         * else does not charge
         */
        if ($this->cvolt == $volt) {
            echo "Charging\n";
        } else {
            echo "Not Charging\n";
        }
    }
}
echo "Enter Volts:";
$vol = utility::getInt();
//new mobile object
$mob = new Mobile($vol);
//new adapter
$adapter = new socketAdapter();
//give apropriate voltage
$volt = $adapter->get3Volts();
$mob->charge($volt);
