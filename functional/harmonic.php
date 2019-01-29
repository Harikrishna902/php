<?php
/**********
 * file name:harmonic.php
 * Prints the Nth harmonic number: 1/1 + 1/2 + ... + 1/N
 *@authour harikrishna
 *@version 2.0
 *Date 16/01/2019
 *************************************************/

/**
 * requires method in Utility to take input and find leap year
 */
require 'utility.php';
echo "enter the nth value of harmonic number\n";
$value = utility::getInt();
if ($value <= 0) {
    echo "input value must be greater than zero(0)";

} else {
    utility::getHarmonic($value);
}
