<?php
/**
 * filename:vendingMachine.php
 * to calculate the minimum number of Notes as well as the Notes to be returned by the Vending Machine as a Change
 * @author harikrishna
 * @version 2.0
 * @since 18/01/2019
 **********************************************************************************************/
require 'utility.php';

$arrayOne = array('1000', '500', '100', '50', '20', '10', '2', '1');
echo " enter the amount \n";
$money = utility::getInt();
utility::calcnotes($arrayOne, $money);

?>