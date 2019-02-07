<?php
/**
 *@fileName:server.php
 *@Desc:implementing Factory design pattern by taking to create a Computer Factory 
 *that can Produce PC, Laptop and Server Class Computers
 *@author harikrishna
 *@version 1.0
 *Date: 7/02/2019
 *********************************************************************************************/
class Server {
    public $name;   //holds the name of an item 
    public $IP;     //holds the ip address of an item
    public $loc;    //holds the brand name of an item
    /**
     * function for Server to perform their operation
     */
    public function server($name,$IP,$loc){
        $this->name = $name;
        $this->IP = $IP;
        $this->loc = $loc;
    }
    /**
     * this function returns the name of an item
     */
    function name(){
        return $this->name;
    }
     /**
     * this function returns the ip address of an item
     */
    function IP(){
        return $this->IP;
    }
     /**
     * this function returns the location of an item
     */
    function loc(){
        return $this->loc;
    }
}
