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

/**
 * abstract class with  function update
 */
abstract class AbstractObserver
{
    abstract public function update(AbstractSubject $subject_in);
}
