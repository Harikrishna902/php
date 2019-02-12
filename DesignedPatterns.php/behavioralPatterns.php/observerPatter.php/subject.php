<?php
/**
 * filename:subject.php
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
/**
 * abstract class with functions attach,detach,notify
 * and using dependecy injection of AbstractObserver
 */
abstract class AbstractSubject
{
    abstract public function attach(AbstractObserver $observer_in);
    abstract public function detach(AbstractObserver $observer_in);
    abstract public function notify();
}
