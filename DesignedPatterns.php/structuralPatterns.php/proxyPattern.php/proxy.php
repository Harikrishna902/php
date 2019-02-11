<?php
/**
 *@fileName:proxy.php
 *@Desc:implementing proxy design pattern by taking command excution in terminqal as example
 *@author harikrishna
 *@version 1.0
 *Date: 8/02/2019
 *********************************************************************************************/
require_once 'terminalExec.php';
require_once '/home/admin1/workspace/Harikrishna/DesignedPatterns.php/utility.php';
/**
 * top level exception handler function to handle exception
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
});
class commandExc
{

    public function main()
    {
        try {
            $tExec = new TerminalExec("hari", "hari@902");
            //command to list the files in that folder
            $tExec->run("ls -ltr");
            // creating a file in folder
            //$tExec->run("touch abc.txt");
            //removing the file from folder
            //$tExec->run("rm abc.txt");

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
//calling the function
$obj = new commandExc();
$obj->main();
