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
                fscanf(STDIN, " %s \n ", $val);
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
    public static function getStringArray()
    {
        return trim(fgets(STDIN));
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
    /**
     * Function to find the factorial
     */
    public static function factorial($n)
    {
        $fact = 1;
        for ($i = 1; $i <= $n; $i++) {
            $fact = $fact * $i;
        }
        return $fact;
    }

    /**
     * Function to find if no is prime or not
     * @param n the no to check
     * @return true/false if prime or  not
     */
    public static function isPrime($n)
    {
        for ($i = 2; $i <= $n / 2; $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
    /**
     * Function to find the primenumbers
     */
    public static function primes($number)
    {
        $i = 0;
        // declaring an array
        $primesnumbers = array();
        //iterations through the loop
        for ($indexi = 1; $indexi <= $number; $indexi++) {
            //used to check the status of a number
            $count = 0;
            for ($indexj = $indexi; $indexj >= 1; $indexj--) {
                // condition of primenumber
                if ($indexi % $indexj == 0) {
                    $count++;
                }
            }
            //equating with 2
            if ($count == 2) {
                $primesnumbers[$i] = $indexi;
                $i++;
            }
        }
        for ($index = 0; $index < sizeof($primesnumbers); $index++) {

            echo $primesnumbers[$index] . " ,";
        }
        return $primesnumbers;
    }


    public static function primeNumber()
        {
            $arr = array();
            $index = 0;
            /*
            * for loop initialize from 2 because 0 and 1 are not prime number
            */
            for ($i = 2; $i < 1000; $i++) {
                /*
                * for loop to check that number is divisible by any other number or not if it
                * is divisible by any other number then loop will break and return false
                */
                $b = true;
                for ($j = 2; $j <= $i / 2; $j++) {
                    if ($i % $j == 0) {
                        $b = false;
                        break;
                    }
                }
                /*
                * if number is divisible by only one and itself the it will add to ArrayList
                */
                if ($b == true) {
                    $arr[$index++] = (string)$i;
                    //echo $i."\n";
                }
            }  
            return $arr; 
        }


    /**
     * Function to find the p plindrome rimenumbers
     */
    public static function palindrome($primearray)
    {
        $rev = 0;
        $i = 0;
        echo " palindromes are: \n";
        for ($indexi = 0; $indexi < sizeof($primearray); $indexi++) {
            $num = $primearray[$indexi];
            // while($num>0)
            // {
            // $ld=$num%10;
            // $rev=$rev*10+$ld;
            // $num=$num/10;
            // }
            $rev = strrev("$num");

            if ($num == $rev) {
                echo $primearray[$indexi] . "  ";
            }
        }

    }
    /**
     * Function to find the primenumber  anagarams
     */
    public static function primeanagrams($prime)
    {
        echo "  prime anagrams are \n:";
        $i = 0;
        for ($indexi = 0; $indexi < sizeof($prime); $indexi++) {
            for ($indexj = $indexi + 1; $indexj < sizeof($prime); $indexj++) {
                $num = $prime[$indexj];
                $array1 = str_split("$num");
                sort($array1);
                $rev = implode("", $array1);
                if ($prime[$indexi] == $rev) {
                    echo $prime[$indexi] . " ";
                    echo $prime[$indexj] . " ";
                }
            }

        }
    }

    /**
     * static function calculating day of week using below formula and returning it
     *
     * @return d0 the day of the week
     */
    public static function dayOfWeek($d, $m, $y)
    {
        
        if ($d == 0 && $d > 31) {
            echo "invalid number";
        } else if ($m == 0 && $m > 12) {
            echo "invalid m number";
        } else if ($y == 0) {
            echo "invalid y ";
        }
        $y0 = floor($y - (14 - $m) / 12) + 1;
        $x = floor($y0 + $y0 / 4 - $y0 / 100 + $y0 / 400);
        $m0 = ($m + 12 * floor(((14 - $m) / 12)) - 2);
        $d0 = floor(($d + $x + floor((31 * $m0) / 12)) % 7);
        return $d0;
    }

    /**
     * function to find the leap y
     */

    public function leap()
    {
        echo "enter the y \n";
        $y = utility::getInt();
        if (strlen((String) $y) == 4) {
            //calling the function fron Utility class
            if (utility::isLeapy($y)) {
                echo "is a leap y \n";
            } else {
                echo "is not a leap y \n";
            }

        } else {
            echo "enter valid  y";
        }
    }

    //Leapy::leap();

    /**
     * function to find the leap y
     */
    public static function isLeapy($y)
    {
        return (($y % 4 == 0) && ($y % 100 != 0) || ($y % 400 == 0));
    }

    public static function Calendar()
    {
        $m;
        $y;
        echo "enter month \n ";
        $m = utility::getInt();
        while ($m > 12) {
            echo "enter valid m number \n";
            $m = utility::getInt();
        }
        echo "enter year \n";
        $y = utility::getInt();
        while ($y < 1000) {
            echo "enter valid year \n";
            $y = utility::getInt();
        }
        $d = 1;
        $d0 = utility::dayOfWeek($d, $m, $y);
        $Calendar = array();
        $days = array('31', '28', '31', '30', '31', '30', '31', '31', '30', '31', '30', '31');
        $y = array('Jan', 'feb', 'mar', 'April', 'May', 'june', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
        $week = array('Sunday', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
        if (utility::isLeapy($y)) {
            $days[1] = 29;
        }
        for ($i = 0; $i < 6; $i++) {
            for ($j = 0; $j < 7; $j++) {
                $Calendar[$i][$j] = -1;
            }
        }
        echo "\t" . $y[$m - 1]."\n";
        $dateinc = 1;
        
        for ($i = $d0; $i < 7; $i++) {
            $Calendar[0][$i] = $dateinc++;
        }
        for ($i = 1; $i < 6; $i++) {
            for ($j = 0; $j < 7; $j++) {
                $Calendar[$i][$j] = $dateinc++;
            }
        }
        for ($l = 0; $l < sizeof($week); $l++) {
            echo "\t" . $week[$l] . " ";
        }
        
        echo "\n";
        for ($i = 0; $i < 6; $i++) {
            for ($j = 0; $j < 7; $j++) {
                if (($Calendar[$i][$j] < 0) || ($Calendar[$i][$j] > $days[$m - 1])) {
                    echo "\t";
                } else if ($Calendar[$i][$j] > 0) {
                    echo "\t" . $Calendar[$i][$j] . " ";
                }
            }
            echo "\n";
        }
        return $Calendar;
    

    }
}

