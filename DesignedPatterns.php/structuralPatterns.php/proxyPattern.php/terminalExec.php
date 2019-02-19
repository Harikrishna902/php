<?php
/**
 *@fileName:terminalImp.php
 *@Desc:implementing proxy design pattern by taking command excution in terminqal as example
 *@author harikrishna
 *@version 1.0
 *Date: 9/02/2019
 *********************************************************************************************/

require_once 'terminal.php';
require_once 'terminalImp.php';
require_once 'terminalExec.php';
/**
 * creating the class to implement the interface
 */
class TerminalExec implements Terminal
{
    public $isAdmin = false;

    /**
     *function to validate username and password
     */
    public function __construct($user, $password)
    {
        global $isAdmin;
        try {
            if (("hari" == $user) && ("hari@902" == $password)) {
                $isAdmin = true;

            } else {
                throw new Exception("invalid credentials \n");
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    /**
     * function to run the vlaidating command
     */
    public function run($cmd)
    {
        global $isAdmin;
        $terminalRun = new TerminalImp;
        if ($isAdmin) {
            $terminalRun->run($cmd);
        }

    }
}
