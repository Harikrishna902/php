<?php
/**
 *filename:patternTest.php
 *Program to create observer Design Pattern by taking cricketpalyers in sqaud as example
 *@version 1.0
 *@author harikrishna
 *@since 12-01-2019
 ****************************************************************************************************/
/**
 * top level exception handler function to handle exception
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
});
require_once 'patternSubject.php';
echo "BEGIN TESTING OBSERVER PATTERN\n";
echo "\n";
$patternGossiper = new PatternSubject();
$patternGossipFan = new PatternObserver();
$patternGossiper->attach($patternGossipFan);
$patternGossiper->updateFavorites('Sehwag, Kohli, Sachin');
$patternGossiper->updateFavorites('Sehwag, Kohli, Dhoni');
$patternGossiper->detach($patternGossipFan);
$patternGossiper->updateFavorites('Sehwag, Kohli, Pathan');
echo "END TESTING OBSERVER PATTERN\n";
