<?php
/**
 *@fileName:terminal.php
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
//require('terminalImp.php');
interface Terminal
{
    public function run($cmd);
}
