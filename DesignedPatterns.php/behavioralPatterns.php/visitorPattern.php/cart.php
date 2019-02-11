<?php
/**
 *@fileName:cart.php
 *@Desc:implementing Behavioral design pattern by taking shopping cart  as example
 *@author harikrishna
 *@version 1.0
 *Date: 11/02/2019
 *********************************************************************************************/
require_once 'items.php';
require_once 'book.php';
require_once 'fruit.php';
require 'cartImp.php';
/**
 * top level exception handler function to handle exception
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
});
function clientCode(array $components, cartVisitor $visitor)
{
    foreach ($components as $component) {
        $component->accept($visitor);
    }

}
$components = [
    new Book("Half GirlFriend", 200, 5),
    new Fruit(150, "Apple"),
];
$visitorOne = new cartImp;
clientCode($components, $visitorOne);
echo "\n";
