<?php
/**
 *filename:iocOne.php
 *Program to create Inversion of control
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
 * class part aact as a part of class
 */
class Part
{
}

class Engine
{
    protected $part;
    public function __construct(Part $part)
    {
        $this->part = $part;
    }
}

class Car
{
    protected $engine;
    public function __construct(Engine $engine)
    {
        $this->engine = $engine;
    }

    public function run()
    {
        echo "vrooom vroom \n";
    }
}

class Container
{

    public static $deps = [];

    public static function init()
    {
        $debs = include "dep.php";
        foreach ($debs as $key => $closure) {
            static::$deps[strtolower($key)] = $closure;
        }
    }

    public static function getInstance(string $classname)
    {
        if (array_key_exists(strtolower($classname), static::$deps)) {
            return call_user_func(static::$deps[strtolower($classname)]);
        } else {
            throw new Exception("Class Not Found\n add dependency first \n");
        }
    }

    public static function addDependency(string $classname, closure $closure)
    {

        self::$deps[strtolower($classname)] = $closure;
    }

}
Container::init();
$deb = include "dep.php";
$car = Container::getInstance("car");
$car->run();
//print_r($car);
