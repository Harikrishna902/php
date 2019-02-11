<?php
/**
 *@fileName:book.php
 *@Desc:implementing Behavioral design pattern by taking shopping cart  as example
 *@author harikrishna
 *@version 1.0
 *Date: 11/02/2019
 *********************************************************************************************/
require_once 'items.php';
require_once  'visitor.php';
/**
 * top level exception handler function to handle exception
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
});
/**
 * Note that we're calling `visitConcreteComponentA`, which matches the
 * current class name. This way we let the visitor know the class of the
 * component it works with.
 */
class Book implements Items
{
    private $name;
    private $price;
    private $quantity;
    public function __construct($gName, $gPrice, $gQuantity)
    {
        $this->name = $gName;
        $this->price = $gPrice;
        $this->quantity = $gQuantity;

    }
    /**
     * function to get name 
     * @return name
     */
    public function getName()
    {
        return $this->name;
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
     * function to get quantity
     * @return quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * function to accept thye book 
     * dependency of visitor
     */
    public function accept(cartVisitor $visitor)
    {
        $visitor->visitBook($this);
    }

}
