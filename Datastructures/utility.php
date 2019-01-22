<?php
/**********
 * Helper function containing methods to use in other php classes
 *@authour harikrishna
 *@version 2.0
 *Date 22/01/2019
 */
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
        fscanf(STDIN, "%s\n", $val);
        while (!is_float($val)) {
            echo "ivalid input try again\n";
            fscanf(STDIN, " %s\n ", $val);
        }
        return $val;
    }
    /**To get Strings array */
     public static function getStringArray(){
     return trim(fgets(STDIN));
      }  

    /**
     * to get input unless its an float
     */
    public static function getfloat()
    {
        fscanf(STDIN, "%s", $val);
        while (!is_float($val)) {
            echo "invalid input try again \n";
            fscanf(STDIN, " %ds", $val);
        }
        return $val;
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

    public static function getIntArr()
    {
        echo "enter array size";
        $size = utility::getInt();
        $arr = array();
        echo "enter array value ";
        for ($i = 0; $i < $size; $i++) {
            $arr[$i] = utility::getInt();
        }
        return $arr;
    }
}
?>