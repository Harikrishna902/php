<?php
/**
 *@fileName:terminalImp.php
 *@Desc:implementing proxy design pattern by taking command excution in terminqal as example
 *@author harikrishna
 *@version 1.0
 *Date: 9/02/2019
 *********************************************************************************************/
/**
 * top level exception handler function to handle exception
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
});
require_once 'terminal.php';
/**
 * creating a class to implement the interface Terminal
 */
class TerminalImp implements Terminal
{
    public function run($cmd)
    {
        $output = shell_exec($cmd);
        echo $output;
    }
}
