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
 * class part act as a part of class
 */
class Part
{
}
/**
 * class engine act as engine of car
 */
class Engine
{
    protected $part;
    public function __construct(Part $part)
    {
        $this->part = $part;
    }
}
/**
 * class car with 
 * @param engine
 */
class Car
{
    protected $engine;
    public function __construct(Engine $engine)
    {
        $this->engine = $engine;
    }
/**
 * function to run the car
 */
    public function run()
    {
        echo "vrooom vroom \n";
    }
}
/**
 * class container 
 */

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
     /**
      *function to getInstance
      *using dependency
      */
    public static function getInstance(string $classname)
    {
        if (array_key_exists(strtolower($classname), static::$deps)) {
            return call_user_func(static::$deps[strtolower($classname)]);
        } else {
            throw new Exception("Class Not Found\n add dependency first \n");
        }
    }
    /**
     * function to addDependency
     */
    public static function addDependency(string $classname, closure $closure)
    {

        self::$deps[strtolower($classname)] = $closure;
    }

}
Container::init();
$deb = include "dep.php";
$car = Container::getInstance("car");
/**
 * calling the run function
 */
$car->run();
//print_r($car);
