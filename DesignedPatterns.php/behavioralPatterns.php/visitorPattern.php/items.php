<?php
/**
 *@fileName:items.php
 *@Desc:implementing Behavioral design pattern by taking shopping cart  as example
 *@author harikrishna
 *@version 1.0
 *Date: 11/02/2019
 *********************************************************************************************/
require('visitor.php');
/**
 * top level exception handler function to handle exception
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
});
interface Items
{
    //dependency injection of visitor
    public function accept(cartVisitor $visitor);
}
