<?php
/**
 *@fileName:visitor.php
 *@Desc:implementing Behavioral design pattern by taking shopping cart  as example
 *@author harikrishna
 *@version 1.0
 *Date: 11/02/2019
 *********************************************************************************************/
require_once 'book.php';
require_once 'fruit.php';
/**
 * top level exception handler function to handle exception
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
});
interface cartVisitor
{
    public function visitBook(Book $element);
    public function visitFruit(Fruit $element);
}
?> 