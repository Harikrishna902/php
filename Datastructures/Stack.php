<?php
/**********
 *Helper functions for the implementations of Stack
 *@authour harikrishna
 *@version 2.0
 *Date 23/01/2019
 */
class Node
{
    /* Link to next node */
    public $next;
    /* Data to hold */
    public $data;

    /** Node constructor */
    public function __construct($d)
    {
        $this->data = $d;
        $this->next = null;
    }
}
class Stack
{
    //top value
    public $top;
    //size of the stack intially
    private static $size = 0;
    //
    // function for adding the elements to the stack
    public function push($item)
    {
        //$iteam;
        $new_node = new Node($item);
        //checking the stack and inserting the data
        if ($this->top == null) {
            $this->top = $new_node;
        } else {
            $new_node->next = $this->top;
            $this->top = $new_node;
        }
        //increases the size
        self::$size++;
    }
    //function for removing r deleting the elements from the stack
    public function pop()
    {
        if ($this->top == null) {
            //throws exception is stack is empty
            echo "stack underflow \n";
        }
        $val = $this->top->data;
        $this->top = $this->top->next;
        self::$size--;
        return $val;
    }
    //function to display the data
    public function display()
    {
        $current = $this->top;
        if ($current == null) {
            echo "stack is empty\n";
        }
        while ($current != null) {
            echo $current->data . " ";
            $current = $current->next;
        }
    }
    //function to return the size of stack
    public function size()
    {
        return self::$size;
    }
    //function to check stack is empty r not
    public function isEmpty()
    {
        return $this->top == null;
    }
    public function peek()
    {
        if (!$this->isEmpty()) {
            return $this->top->data;
        } else {
            echo "stack is empty\n";
        }
    }
}
