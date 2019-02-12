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
require_once 'observer.php';
class PatternObserver extends AbstractObserver
{
    public function __construct()
    {}

    public function update(AbstractSubject $subject)
    {
        echo "*IN PATTERN OBSERVER - NEW UPDATE ALERT*\n";
        echo " new favorite patterns: " . $subject->getFavorites() . "\n";
        echo "*IN PATTERN OBSERVER - PATTERN UPDATE ALERT OVER*\n\n";
    }
}
