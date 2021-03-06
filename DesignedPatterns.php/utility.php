<?php
/**
 *Desc:Helper function containing methods to use in other php classes
 *@author harikrishna
 *@version 2.0
 *Date 07/02/2019
 *********************************************************************************************/
class utility
{
    /**
     * to get input unless its an integere
     */
    public static function getInt()
    {
        fscanf(STDIN, "%s \n", $val);
        if ($val == 0) {
            while (!is_numeric($val)) {
                echo "ivalid input try again\n";
                fscanf(STDIN, " %s\ n ", $val);
            }
            return $val;
        } else {
            while (!is_numeric($val) || $val / (int) $val > 1) {
                echo "ivalid input try again\n";
                fscanf(STDIN, " %s\n ", $val);
            }
            return (int) $val;
        }
    }
    /**
     * to get input unless its an boolean value
     */
    public static function getBoolean()
    {
        fscanf(STDIN, "%s\n", $val);
        while ($val !== 't' && $val !== 'f') {
            echo "ivalid input try again\n";
            fscanf(STDIN, " %s\n ", $val);
        }
        return $val;
    }

    /**
     * to get input unless its an decimal value
     */
    public static function getDouble()
    {
        fscanf(STDIN, "%f\n", $val);
        while (!is_float($val)) {
            echo "ivalid input try again\n";
            fscanf(STDIN, " %f\n ", $val);
        }
        return $val;
    }

    /**
     * to get input unless its an Intarr;
     */

    public static function getIntArr()
    {
        echo "enter array size \n ";
        $size = utility::getInt();
        $arr = array();
        echo "enter array value \n ";
        for ($i = 0; $i < $size; $i++) {
            $arr[$i] = utility::getInt();
        }
        return $arr;
    }
    /**
     * to get input unless its an String
     */

    public static function getString()
    {
        fscanf(STDIN, "%s", $val);
        while (is_numeric($val)) {
            echo "invalid input try again \n";
            fscanf(STDIN, " %s ", $val);
        }
        return $val;
    }
}

    