<?php
/**
 *@fileName:pc.php
 *@Desc:implementing Factory design pattern by taking to create a Computer Factory 
 *that can Produce PC, Laptop and Server Class Computers
 *@author harikrishna
 *@version 1.0
 *Date: 7/02/2019
 *********************************************************************************************/
require ("laptop.php");
require ("server.php");
require ("pc.php");
require('/home/admin1/workspace/Harikrishna/DesignedPatterns.php/utility.php');
/**
 * top level exception handler function to handle exception
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
});
/**
 * Factory class For creating an object and and calling the respective class according to requirements 
 */
class ComputerFactory{
    /**
     * function which gives complete information
     */
    public function getInfo($n){
        for($i=0;$i<$n;$i++){
            switch($n){
            
                case 1: echo "Your Laptop details are:\n";
                        return new Laptop("Dell","1TB","4GB");
                        break;
                case 2: echo "Your Server Details are:\n";
                        return new Server("ActFiber","172.23.200.10","Bridgelabz");
                        break;
                case 3: echo "Your PC Details:\n";
                        return new Pc("Apple","500GB","1GB","windows 10");
                        break;
                default : echo "Invalid Input";
                        
                        break;
            }
            
        }
        echo "Exit  ..!!!\n";
    }
}
/**
 * calling main function
 */
function main(){
    $f = new ComputerFactory();
    echo "Press\n1.Laptop\n2.Server\n3.PC \n";
    $obj = $f->getInfo(utility::getInt());
    $ref = new ReflectionClass($obj);
   // print_r($ref);
    //print_r($ref->get_class_methods($ref),true);
    //echo "Properties Name:\n";
    $dfdf = $ref->getProperties() ;
    //print_r($dfdf);
    foreach($ref->getProperties() as $key){
        echo $key->getName()."->".$key->getValue($obj)."\n";
    } 
}
main();
?>