<?php
/**
 *@fileName:facadeOne.php
 *@Desc:implementing facade design pattern by taking vehcile showroom  as example
 *@author harikrishna
 *@version 1.0
 *Date: 11/02/2019
 *********************************************************************************************/
require('/home/admin1/workspace/Harikrishna/DesignedPatterns.php/utility.php');
/**
 * top level exception handler function to handle exception
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
});

//creating a vehicle interface with getMenus function so that unrelated class can implement same methods
interface vehicle
{
    //abstract function of interface class
    public function getTypeOfVehicle(); 
}
//creating class fourWheeler so that it can be used by NonVegRestaurant class
class fourWheeler
{
}
//creating class twoWheeler so that it can be used by VegRestaurant class
class twoWheeler
{
}
//creating class Both so that it can be used by fourWheelerNtwoWheeler class
class Both
{
}
//creating fourWheeler class that implements vehicle interface and it should implement getmenus function
class fourWheeler implements vehicle

{
    /**
     *Creating function getTypeOfVehicle to get the menu of that particular restaurant
     *@param nothing
     *@return fourWheelVehicle is returned
     */
    public function getTypeOfVehicles()
    {
        //creating fourWheelerVehicle object
        $fourWheelVehicle = new fourWheelerVehicle(); 
        //returning fourWheelVehicle object
        return $fourWheelVehicle; 
    }
}
class twoWheeler implements vehicle

{
    /**
     *Creating function getTypeOfVehicle to get the menu of that particular restaurant
     *@param nothing
     *@return twoWheelVehicle is returned
     */
    public function getTypeOfVehicles()
    {
        //creating twoWheelerVehicle object
        $twoWheelVehicle = new twoWheelerVehicle(); 
        //returning twoWheelVehicle object
        return $twoWheelVehicle; 
    }
}
//creating VegNNonVegBothRestaurant class that implements HOtel interface and it should implement getmenus function
class fourWheelerNtwoWheeler implements vehicle
{
    /**
     *Creating function getMenus to get the menu of that particular restaurant
     *@param nothing
     *@return both is returned (i.e, it has both veg and non veg menu)
     */
    public function  getTypeOfVehicles()
    {
        //creating Both object
        $both = new Both(); 
        //returning Both object
        return $both; 
    }
}
//creating manager class which is facade class
class manager
{
    /**
     *Creating function getTwoWheelerVehicle to get the menu of that particular restaurant
     *@param nothing
     *@return nothing
     */
    public function getTwoWheelerVehicle()
    {  
        //creating new twoWheelerVehicle  object
        $twoWheelVehicle = new twoWheelerVehicle(); 
        $twoWheelVehicle = $twoWheelVehicle->getTwoWheelerVehicle(); // calling getMenus function of VegRestaurant class on vegRestaurant object
        echo "Here are the two wheeler vechicles which you are looking for\n ";
    }
}
     /**
     *Creating function getNonVegMenu to get the menu of that particular restaurant
     *@param nothing
     *@return nothing
     */
    function getFourWheelerVechicle()
    {
        //creating new fourWheelerVechicle object
        $FourWheelVechicle =new fourWheelerVechicle(); 
        // calling getMenus function of fourWheelerVechicle class on fourWheelerVechicle object
        $FourWheelVechicle = $FourWheelVechicle->getTwoWheelerVehicle(); 
        echo "Here are the four wheeler vechicles which you are looking for \n ";
    }
    /**
     *Creating function getBothVehicles to get the menu of that particular restaurant
     *@param nothing
     *@return nothing
     */
     function getBothVehicles()
    {
         //creating new fourWheelerNtwoWheeler object
        $fourWheelNtwoWheel = new fourWheelerNtwoWheeler();
        // calling getMenus function of VegNNonVegBothRestaurant class on fourWheelerNtwoWheelerobject
        $bothMenu = $fourWheelNtwoWheel->getTypeOfVehicles(); 
        echo "Here are the vechicles of both type you are looking for:\n ";
    }
    //creating showroom class for testing Facade Design pattern
   class showroom
{
    /**
     *Creating function customerto know how the facade design pattern works
     *@param nothing
     *@return nothing
     */
    public function customer()
    {
        //try catch
        try {
            echo ("\n----------FACADE DESIGN PATTERN------------\n");
            echo ("---------BEGIN TESTING FACADE PATTERN----------\n");
            echo ("\n");
            //asking the user for input
            echo "\nPress 1 for twoWheelerVehicle \nPress 2 for fourWheelerVehicle \nPress 3 for Both twoNfourWheelerVehicles \nPress 4 to exit \n";
            //validating the input using utility function
            $choice = utility::getInt(); 
            //creating new manager  class
            $manager = new Manager(); 
            //switch statement is used to perform different actions based on different conditions
            switch ($choice) {
                case 1:
                    //if customer chooses twoWheeler
                    $twoWheelVehicle = $manager->getTwoWheelerVehicle(); 
                    echo "\n";
                    //calling customer function to show the menu to user again
                    $this->customer(); 
                    break;
                case 2:
                    //if customer chooses nonveg menu
                    $fourWheelVehicle= $manager->getFourWheelerVechicle(); 
                    echo "\n";
                    echo "\n";
                     //calling customerFacing function to show the menu to user again
                    $this->customer();
                    break;
                case 3:
                    //if customer chooses two and fourWheel vehicles
                    $both = $manager->getBothVehicles(); //calling getVegNonMenu function on hotelKeeper object to show the menu
                    echo "\n";
                    echo "\n";
                    $this->customer(); //calling customerFacing function to show the menu to user again
                    break;
                default:
                    //if customer chooses to exit
                    echo "Thank You for visiting Come again ...\n";
                    echo "\n";
                    break;
            }
        } catch (Exception $e) {
            echo "\n", $e->getMessage();
        } finally {
            echo ("------------END TESTING FACADE PATTERN----------------\n");
            echo ("\n");
        }
    }
}

//creating new client object
$showroom = new Showroom();
//calling customerFacing function on client object
$showroom->customer();


