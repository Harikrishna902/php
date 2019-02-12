<?php
/**
 *filename:observer.php
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
 * abstract class with  function update
 */
abstract class AbstractObserver
{
    abstract public function update(AbstractSubject $subject_in);
}
