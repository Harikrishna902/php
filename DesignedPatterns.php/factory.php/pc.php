<?php
/**
 *@fileName:pc.php
 *@Desc:implementing Factory design pattern by taking to create a Computer Factory 
 *that can Produce PC, Laptop and Server Class Computers
 *@author harikrishna
 *@version 1.0
 *Date: 7/02/2019
 *********************************************************************************************/
/**
 * top level exception handler function to handle exception
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
});
class pc
{
    //holds the name of an item
    public $brand;
    //holds the size of harddisk
    public $hardDisk;
    //holds the size of ram
    public $Ram;
    //holds the version of windows used
    public $windows;
    /**
     * function for laptop to perform their operation
     */
    public function pc($brand, $hardDisk, $Ram,$windows)
    {
        $this->brand = $brand;
        $this->hardDisk = $hardDisk;
        $this->Ram = $Ram;
        $this->windows=$windows;
    }
    /**
     * this function returns the name of an item
     */
    public function brand()
    {
        return $this->brand;
    }
    /**
     * this function returns the size of harddisk
     */
    public function hardDisk()
    {
        return $this->hardDisk;
    }
    /**
     * this function returns size of ram
     */
    public function Ram()
    {
        return $this->Ram;
    }
    /**
     * function returns the windows version
     */
    public function windows()
    {
        return $this->windows;
    }
}