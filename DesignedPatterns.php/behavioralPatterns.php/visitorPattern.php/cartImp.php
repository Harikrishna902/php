<?php
/**
 *@fileName:cartImp.php
 *@Desc:implementing Behavioral design pattern by taking shopping cart  as example
 *@author harikrishna
 *@version 1.0
 *Date: 11/02/2019
 *********************************************************************************************/
require_once 'cart.php';
require_once 'book.php';
require_once 'fruit.php';
require_once 'visitor.php';
/**
 * top level exception handler function to handle exception
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
});
/**
 * class to implement the cartvistor interface
 */
class cartImp implements cartVisitor
{
    /**
     * function to visit book
     * @param price
     * @param name
     * @param quantity
     */
    public function visitBook(Book $element)
    {
        echo "Book \n";
        echo "BookName:" . $element->getName() . "\n price:" . $element->getPrice() . "\n Quantity:" . $element->getQuantity()."\n";
        echo "\n";
    }
    /**
     * function to visit fruit
     * @param price
     * @param type
     */
    public function visitFruit(Fruit $element)
    {
        echo "Fruit \n";
        echo "price : " . $element->getPrice() . "\nType : " . $element->getType() . "\n";
    }
}
