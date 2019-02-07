<?php
/**
 *@fileName:pc.php
 *@Desc:implementing Factory design pattern by taking to create a Computer Factory 
 *that can Produce PC, Laptop and Server Class Computers
 *@author harikrishna
 *@version 1.0
 *Date: 7/02/2019
 *********************************************************************************************/
class Laptop
{
    //holds the name of an item
    public $brand;
    //holds the ip address of an item
    public $hardDisk;
    //holds the brand name of an item
    public $Ram;
    /**
     * function for laptop to perform their operation
     */
    public function laptop($brand, $hardDisk, $Ram)
    {
        $this->brand = $brand;
        $this->hardDisk = $hardDisk;
        $this->Ram = $Ram;
    }
    /**
     * this function returns the name of an item
     */
    public function brand()
    {
        return $this->brand;
    }
    /**
     * this function returns the ip address of an item
     */
    public function hardDisk()
    {
        return $this->hardDisk;
    }
    /**
     * this function returns the brand name of an item
     */
    public function Ram()
    {
        return $this->Ram;
    }
}