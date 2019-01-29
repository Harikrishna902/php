<?php
/**********
 *filename:monthlyPayment.php
 *Function to calculate monthlyPayment using p,r,
 *@authour harikrishna
 *@version 2.0
 *@since 17/01/2019
 ******************************************************************************************/
require 'utility.php';

echo "enter principal value";
$p = utility::getInt();
echo "enter no of years ";
$y = utility::getInt();
echo "enter rate of interest ";
$r = utility::getInt();
utility::monthlyPayment($p, $r, $y);
