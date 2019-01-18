<?php
/**
 * to calculate the minimum number of Notes as well as the Notes to be returned by the Vending Machine as a Change
* @author harikrishna
 * @version 2.0   
 * @since 18/01/2019
 */
require('utility.php');
//class VendingMachine{
    
        $array1=array('1000','500','100','50','20','10','2','1');
        echo " enter the amount";
        $money=utility::getInt();
        utility::calcnotes($array1,$money);
//}
//VendingMachine::notes();
//$obj = new VendingMachine();
//$obj->notes();
?>