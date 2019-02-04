<?php
class Node
{
    /**
     *  Link to next node
     */
    public $next;

    /*
     *Data to hold
     */
    public $data;

    /**
     * Node constructor
     */
    public function __construct($d)
    {
        $this->data = $d;
        $this->next = null;
    }
}
?>