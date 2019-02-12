<?php
/**
 * filename:facade.php
 *Program to create Facade Design Pattern by taking Restaurant as example
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
require_once 'observer.php';
/**
 * class using inheritance to get the properties of super class
 */
class PatternObserver extends AbstractObserver
{
   // intilisation of constructor
    public function __construct()
    {}
/**
 * function to update the data 
 * generlisation (dependecy injection)
 */

    public function update(AbstractSubject $subject)
    {
        echo "*IN PATTERN OBSERVER - NEW UPDATE ALERT*\n";
        echo " new favorite patterns: " . $subject->getFavorites() . "\n";
        echo "*IN PATTERN OBSERVER - PATTERN UPDATE ALERT OVER*\n\n";
    }
}
