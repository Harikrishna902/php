<?php
/**
 *@fileNanme:linkedStock.php
 *@Description:program to maintain the Stock Symbol Purchased or Sold in 
 *a Stack implemented using Linked List to indicate transactions done.
 *Wheats with properties name, weight, price per kg.
 *@author harikrishna
 *@version 2.0
 *Date :5/01/2019
 *********************************************************************************************/
require 'utility.php';
require 'linkedList.php';
/**
 * creating a user-defined class.
 */
class Stocks
{
    /**
     * declaring the global variables
     */
    public $name;
    public $share;
    public $price;
}
/**
 * function which is used to initialize the variables of a class
 */
function toAdd($arr)
{
    echo "enter the  stock name : ";
    $name = utility::getString();
    echo "enter the share :";
    $share = utility::getInt();
    echo "enter the price :";
    $price = utility::getInt();
    $obj = new Stocks;
    $obj->name = $name;
    $obj->share = $share;
    $obj->price = $price;
    /**
     * storing the object of class in to an array
     */
    $arr = $obj;
    /**
     * returning the stored value.
     */
    return $arr;
}
/**
 * function which it is used to remove the dta a from the storedLinkedList
 */
function toRemove($objs)
{
    echo "enter the stock name :";
    $sname = utility::getString();
    /**
     * function which it is used to search the user given name in a linked list
     */
    $bool = search($sname, $objs);
    /**
     * if bool ==true it indicates the presenece of a user given name in a linked list
     */
    if ($bool == true) {
        /**
         * function used to delete the user given stock name
         */
        delete($sname, $objs);
    } else {
        /**
         * printing it wheteher it is not available in linkedlist
         */
        echo "the entered stock name is not present in linked list \n";
    }
}
/**
 * function which it is used to delete the user given name.
 */
function delete($key, $objs)
{
    $temp = $objs->head;
    while ($temp != null && $temp->data->name == $key) {
        $head = $temp->next;
    }
    while ($temp != null && $temp->data->name != $key) {
        $previous = $temp;
        $temp = $temp->next;
    }
    $previous->next = $temp->next;
}
/**
 * function developed to search a given stock name is present or not
 */
function search($key1, $objs)
{
    $n = $objs->head;
    while ($n != null) {
        if (($n->data->name) == $key1) {
            return true;
        }
        $n = $n->next;
    }
    return false;
}
/**
 * function used to exit from the program
 */
function toExit()
{
    exit();
}
/**
 * function used to display the menu of some content for the user to perform some operations.
 */
function menu($object)
{
    echo "enter 1.toAdd 2.toRemove 3.toprint 4.toExit \n";
    $number = utility::getInt();
    $arr = array();
    $objs = $object;
    switch ($number) {
        case 1:
            $rrr = toAdd($arr);
            echo "\n\n";
            $objs->add($rrr);
            menu($objs);
            break;
        case 2:toRemove($objs);
            echo "\n\n";
            $objs->display();
            menu($objs);
            break;
        case 3:
            $object->display();
            echo "\n\n";
            menu($objs);
            break;
        case 4:toExit();
            echo "Exit  ..!!!\n";
            break;

    }

}
echo "\n";
/**
 * creating an object for the LinkedList developed class.
 */
$object = new linkedList;
/**
 * initially calling the menu function.
 */
menu($object);
