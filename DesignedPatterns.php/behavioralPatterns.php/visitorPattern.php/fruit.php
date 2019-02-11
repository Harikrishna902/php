<?php
/**
 *@fileName:fruit.php
 *@Desc:implementing Behavioral design pattern by taking shopping cart  as example
 *@author harikrishna
 *@version 1.0
 *Date: 11/02/2019
 *********************************************************************************************/
require_once 'items.php';
/**
 * top level exception handler function to handle exception
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
});
class fruit implements Items
{
    private $price;
    private $type;
    /**
     * constructor with cost and type aurgements
     */
    public function __construct($cost, $type)
    {
        $this->price = $cost;
        $this->type = $type;

    }
    /**
     * function to get price
     * @return price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * function to get type
     * @return type
     */

    public function getType()
    {
        return $this->type;
    }
    /**
     * function to accept the fruits
     * and implementing depedency injections
     */
    public function accept(cartVisitor $visitor)
    {
        $visitor->visitFruit($this);
    }
}
