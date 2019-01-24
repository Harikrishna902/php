<?php
/**********
 *Helper functions for the implementations of Stack
 *@authour harikrishna
 *@version 2.0
 *Date 24/01/2019
 */
class Node
{
    public $next;
    public $prev;
    public $data;
    public function __construct($d)
    {
        $this->data = $d;
        $this->next = null;
    }
}
class Dequeue
{
    public $head;
    public $tail;

    /**
     * Function to add the data in front
     */

    public function addfront($iteam)
    {
        $new_node = new Node($iteam);
        if ($this->isEmpty()) {
            $this->tail = $new - node;
        } else {
            $this->head->prev = $new_node;
        }
        $new_node->next = $this->head;
        $this->head = $new_node;
    }
    /**
     * Function to add the remove from front
     */

    public function removeFront()
    {
        $temp = $this->head;
        if ($this->head == $this->tail) {
            $this->tail = null;
        }
        if ($this->isEmpty()) {
            echo "underflow\n";
        } else {
            $this->head->next->prev = null;
        }
        $this->head = $this->head->next;
        $this->temp->next = null;
    }
    /**
     * Function to add the remove from Rear
     */

    public function removeRear()
    {
        $temp = $this->tail;
        if ($this->head == $this->tail) {
            $this->head = null;
        } else {
            $this->tail->prev->next = null;

        }
        $val = $this->tail->data;
        $this->tail = $this->tail->prev;
        $temp->prev = null;
        return $val;
    }
    /**
     * Function to add the add from front
     */

    public function addRear($item)
    {
        $new_node = new Node($item);
        if (!$this->isEmpty()) {
            $this->tail->next = $new_node;
        } else {
            $this->head = $new_node;
        }
        $new_node->prev = $this->tail;
        $this->tail = $new_node;
    }

    /**
     * Function to check node is Empty
     */

    public function isEmpty()
    {
        if ($this->head == null) {
            return true;
        }
        return false;
    }
    /**
     * Function to add the display from front
     */

    public function displayForward()
    {
        $temp = $this->head;
        if ($temp == null) {
            echo "underflow \n";
        }
        while ($temp != null) {
            echo $temp->data . " ";
            $temp = $temp->next;
        }
    }

    /**
     * Function to add the display from rear
     */

    public function displayReverse()
    {
        $temp = $this->tail;
        while ($temp != null) {
            echo $temp->data . " ";
            $temp = $temp->prev;
        }
    }

}
