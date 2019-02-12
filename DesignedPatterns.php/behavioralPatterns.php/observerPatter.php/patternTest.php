<?php
/**
 * filename:facade.php
 *Program to create Facade Design Pattern by taking Restaurant as example
 *@version 1.0
 *@author harikrishna
 *@since 11-01-2019
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
$patternGossiper->updateFavorites('abstract factory, decorator, visitor');
$patternGossiper->updateFavorites('abstract factory, observer, decorator');
$patternGossiper->detach($patternGossipFan);
$patternGossiper->updateFavorites('abstract factory, observer, paisley');
echo "END TESTING OBSERVER PATTERN\n";
