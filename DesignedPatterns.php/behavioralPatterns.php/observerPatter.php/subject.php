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
abstract class AbstractSubject
{
    abstract public function attach(AbstractObserver $observer_in);
    abstract public function detach(AbstractObserver $observer_in);
    abstract public function notify();
}
