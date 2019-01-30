<?php
/**********
 * Helper function containing methods to use in other php classes
 *@authour harikrishna
 *@version 2.0
 *Date 17/01/2019
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
    public static function getStringArray()
    {
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
        for ($index = 0; $index < $size; $index++) {
            $arr[$index] = utility::getInt();
        }
        return $arr;
    }
    /**
     * Detects if given strings are anagrams or not
     * @param s1 the first string
     * @param s2 the second string to check
     * @return true/false if anagrram or not
     *
     */
    public static function isAnagram($sOne, $sTwo)
    {
        $len1 = strlen($sOne);
        $len2 = strlen($sTwo);
        if ($len1 == $len2) {
            $arrayOne = str_split($sOne);
            $arrayTwo = str_split($sTwo);
            sort($arrayOne);
            sort($arrayTwo);
            $s3 = implode("", $arrayOne);
            $s4 = implode("", $arrayTwo);
            if ($s3 == $s4) {
                echo " strings are anagram to each other" . "\n";
            }
        } else {
            echo "strings are not anagrams" . "\n";
        }
    }

    /**
     * Function to find if no is prime or not
     * @param n the no to check
     * @return true/false if prime or  not
     */
    public static function isPrime($n)
    {
        for ($index = 2; $index <= $n / 2; $index++) {
            if ($n % $index == 0) {
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
        $index = 0;
        /**
         * declaring an array
         */
        $primesnumbers = array();
        /**
         * iterations through the loop
         */
        for ($indexi = 1; $indexi <= $number; $indexi++) {
            /**
             * used to check the status of a number
             */
            $count = 0;
            for ($indexj = $indexi; $indexj >= 1; $indexj--) {
                /**
                 *  condition of primenumber
                 */
                if ($indexi % $indexj == 0) {
                    $count++;
                }
            }
            /**
             * equating with 2
             */
            if ($count == 2) {
                $primesnumbers[$index] = $indexi;
                $index++;
            }
        }
        for ($index = 0; $index < sizeof($primesnumbers); $index++) {

            echo $primesnumbers[$index] . " ,";
        }
        return $primesnumbers;
    }

    /**
     * Function to find the primenumbers
     */
    public static function palindrome($primearray)
    {
        $rev = 0;
        $index = 0;
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
     * Function to find the primenumbers
     */
    public static function primeanagrams($prime)
    {
        echo "  prime anagrams are \n:";
        $index = 0;
        for ($indexi = 0; $indexi < sizeof($prime); $indexi++) {
            for ($indexj = $indexi + 1; $indexj < sizeof($prime); $indexj++) {
                $num = $prime[$indexj];
                $arrayOne = str_split("$num");
                sort($arrayOne);
                $rev = implode("", $arrayOne);
                if ($prime[$indexi] == $rev) {
                    echo $prime[$indexi] . " ";
                    echo $prime[$indexj] . " ";
                }
            }

        }
    }

    /**
     * Function to search binary integer in an array
     */
    public static function linear($n, $arr)
    {
        sort($arr);
        $size = count($arr);
        for ($index = 0; $index < $size; $index++) {
            if ($arr[$index] == $n) {
                return $index;
            }
        }
        return false;
    }
    /**
     * Function to search binarySearch integer in an array
     */

    public static function binarySFile($arr)
    {
        sort($arr);
        print_r($arr);
        echo "\n";
        echo "enter element to search \n";
        $key = utility::getString();
        $beg = 0;
        $end = count($arr) - 1;
        while ($beg <= $end) {
            $mid = floor(($beg + $end) / 2);
            if (strcmp($arr[$mid], $key) == 0) {
                echo "found at " . $mid;
                break;
            } else if (strcmp($arr[$mid], $key) < 0) {
                $beg = $mid + 1;
            } else if (strcmp($arr[$mid], $key) > 0) {
                $end = $mid - 1;
            }
        }
        if ($beg > $end) {
            echo "element not found";
        }
    }

    /**
     * Function to sort integer array using insertion sort
     * @param arr the array to be sorted
     * @return arr sorted array
     */
    public static function insertionSort($arr)
    {
        /**
         * gets the size of array
         */
        $size = count($arr);
        for ($index = 1; $index < $size; $index++) {
            /**
             *  getting value for back element
             */
            $j = ($index - 1);
            /**
             * saving it in temperary variable;
             */
            $temp = $arr[$index];
            while ($arr[$j] > $temp && $j >= 0) {
                $arr[$j + 1] = $arr[$j];
                $j--;
            }
            $arr[$j + 1] = $temp;
        }
        return $arr;
    }

    /**
     * Function to sort an array of string
     *
     * @param arr array to be sorted
     * @return arr sorted array
     */
    public static function insertionSortFile($arr)
    {
        for ($index = 1; $index < sizeof($arr); $index++) {
            $key = $arr[$index];
            $j = $index - 1;
            while ($j >= 0) {
                if (strcmp($arr[$j], $key) < 0) {
                    break;
                }
                $arr[$j + 1] = $arr[$j];
                $j--;
            }
            $arr[$j + 1] = $key;
        }
        echo "After sorting the elements in the file \n";
        for ($index = 0; $index < sizeof($arr); $index++) {
            echo $arr[$index] . "\n";
        }
    }
    /**
     * Function to sort integer array using bubble sort algorithm
     *
     * @param arr the array to be sorted
     * @return arr sorted array
     */
    public static function bubbleSortInt($arr)
    {
        $n = sizeof($arr);
        echo $n;
        $temp;
        // Traverse through all array elements
        for ($c = 0; $c < $n - 1; $c++) {
            //for ($index = 0; $index < sizeof($arr); $index++) {
            // Last i elements are already in place
            for ($index = 0; $index < $n - 2; $index++) {
                //for ($j = $index + 1; $j < sizeof($arr); $j++) {
                // traverse the array from 0 to n-i-1
                // Swap if the element found is greater than previous element
                // than the next element
                if ($arr[$index] > $arr[$index + 1]) {
                    $temp = $arr[$index];
                    $arr[$index] = $arr[$index + 1];
                    $arr[$index + 1] = $temp;
                }
            }
        }
        return $arr;
    }

    /**
     * function to find the leap y
     */

    public static function leap()
    {
        //echo "enter the y \n";
        //$y = utility::getInt();
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

    /**
     * function to calculate day for year and date
     * @param month year date
     * @return : d0
     */
    public static function dayOfWeek($d, $m, $y)
    {
        $y0 = floor($y - (14 - $m) / 12) + 1;
        $x = floor($y0 + $y0 / 4 - $y0 / 100 + $y0 / 400);
        $m0 = ($m + 12 * floor(((14 - $m) / 12)) - 2);
        $d0 = floor(($d + $x + floor((31 * $m0) / 12)) % 7);
        return $d0;
    }

    /**
     * Function to calculate temperature from celcius to fahrenhiet and vice-versa
     *
     * @param temp the temperature to convert
     * @param chtemp the character containing the c or f for temp
     * @return conv the converted temperature
     */
    public static function tempConv($temp, $chtemp)
    {
        if (strpos($chtemp, "c") === false && strpos($chtemp, "C") === false) {
            $conv = ($temp * 9 / 5) + 32;
        } else {
            $conv = ($temp - 32) * 5 / 9;
        }
        return $conv;
    }

    /**
     * Function to find squre root of a no using newtons method
     *
     * @param c the integer no of which to find square root
     * @return c the value of square root
     */
    public static function sqrt($c)
    {
        $t = $c;
        $epsilon = 1e-15;
        while (abs($t - ($c / $t)) > $epsilon * $t) {
            $t = ($c / $t + $t) / 2;
        }
        return $t;
    }

    /**
     * function to calculate the monthly payment using compund interest formula
     */
    public static function monthlyPayment($P, $R, $Y)
    {
        $n = 12 * $Y;
        $r = $R / (12 * 100);
        $power = 1 - pow(1 + $r, -$n);
        $payment = $P * $r / $power;
        echo "the amount is:" . "\n";
        echo $payment;
        echo "\n";
    }
    /**
     * function to calculate the notes using vending machine
     */
    public static function calcnotes($arrayOne, $money)
    {
        $index = 0;
        while ($money > 0) {
            while ($money >= $arrayOne[$index]) {
                $notes = floor($money / $arrayOne[$index]);
                echo $arrayOne[$index] . " notes are " . $notes . "\n";
                $money = floor($money % $arrayOne[$index]);
            }
            $index++;
        }
    }
    /**
     * Function to convert decimal to binary
     * 
     * @param integer the decimal number
     * @return bin the binary nomber
     */
    public static function toBinary($num)
    {
        $str = array();
        $index = 0;
        echo "Binary value of " . "$num \n";
        while ($num > 0) {
            $rem = floor($num % 2);
            // array_push($str, $index);
            $num = floor($num / 2);
            $str[$index] = $rem;
            $index++;
        }

        $new = array_reverse($str);
        for ($index = 0; $index < sizeof($new); $index++) {
            echo $new[$index] . " ";
        }
        return $new;
    }

    /**
     * function to convert binary to decimal
     * @param Binary integer to convert
     * @return Integer the value of integer
     */
    public static function toDecimal($strBinArr)
    {
        $newStr = strrev($strBinArr);
        $strBinArr = str_split($newStr);
        $res = 0;
        for ($index = 0; $index < sizeof($strBinArr); $index++) {
            $res = $res + $strBinArr[$index] * pow(2, $index);
        }
        echo "\n decimal value \n";
        echo $res . "\n";
    }

    /**
     * function to calculate the notes using vending machine
     */
    public static function swapNibbles($x)
    {
        return (($x & 0x0F) << 4 | ($x & 0xF0) >> 4);
    }

    /**
     * function to guess the no given by user in 2^n times
     */
    public static function search()
    {
        $low = 0;
        $high = 10;
        for ($index = 0; $index < 10; $index++) {
            while ($low <= $high) {
                $mid = round(($low + $high) / 2);
                echo "If your no is bw " . $low . " and " . $mid . " press 1\n";
                echo "If your no is bw " . $mid . " and " . $high . " press 2\n";
                //get user no for choice
                $s = utility::getInt();
                /**
                 * user enters 2 and 1 according to output
                 */

                //if low is high then the no is found
                if ($high == $mid) {
                    echo "your no is " . $high;
                    return $high;
                } else if ($s != 1) {
                    $low = $mid;
                } else {
                    $high = $mid;
                }
            }
        }
    }

    /**
     * function to find element in using binarysearch
     */
    public static function binarySearch($n)
    {
        echo "1 : Binaray search\n";
        $start = utility::startTime();
        $arr = array();
        echo "enter element \n";
        for ($index = 0; $index < $n; $index++) {
            $arr[$index] = utility::getInt();
        }
        sort($arr);
        print_r($arr);
        echo "enter element to search\n ";
        $key = utility::getInt();
        /**intial size of array */
        $beg = 0;
        /**
         * length of array
         */
        $end = count($arr) - 1;
        while ($beg <= $end) {
            /**
             * calculate mid and round
             */
            $mid = floor(($beg + $end) / 2);
            /**
             * if mid of array is key then key is found
             */
            if ($arr[$mid] == $key) {
                echo "key found at " . $mid . "\n";
                break;
                /**if key is less than mid of array then array moves forward*/
            } else if ($key < $arr[$mid]) {
                $end = $mid - 1;
            } else {
                /**
                 * if key>arry of mid then mid+1
                 */
                $beg = $mid + 1;
            }
        }
        if ($beg > $end) {
            echo "element not found\n";
        }
        $stop = utility::stopTime();
        $elapsed = utility::elapsedTime($start, $stop);
        echo ($elapsed / 1000) . " sec elasped\n";
        return $elapsed;
    }

    /**function to find element in using binarysearch with string */
    public static function binarySearchString($n)
    {
        echo "2 : binarysearch string \n";
        $start = utility::startTime();
        $arr = array();
        echo "enter element in string \n";
        for ($index = 0; $index < $n; $index++) {
            /**enter elements into array */
            $arr[$index] = utility::getStringArray();
        }
        sort($arr);
        print_r($arr);
        echo "enter element to search \n";
        $key = utility::getString();
        $beg = 0;
        $end = count($arr) - 1;
        while ($beg <= $end) {
            $mid = floor(($beg + $end) / 2);
            if (strcmp($arr[$mid], $key) == 0) {
                echo "found at " . $mid;
                break;
            } else if (strcmp($arr[$mid], $key) < 0) {
                $beg = $mid + 1;
            } else if (strcmp($arr[$mid], $key) > 0) {
                $end = $mid - 1;
            }
        }
        if ($beg > $end) {
            echo "element not found\n";
        }
        $stop = utility::stopTime();
        $elapsed = utility::elapsedTime($start, $stop);
        echo ($elapsed / 1000) . " sec elasped\n";
        return $elapsed;
    }

    /**function to sort integers using insertion sort */
    public static function insedrtionSort($n)
    {
        echo " 3: insertion sort \n";
        $start = utility::startTime();
        $arr = array();
        echo "enter element \n";
        for ($index = 0; $index < $n; $index++) {
            $arr[$index] = utility::getInt();
        }
        $len = sizeof($arr);
        for ($index = 1; $index < $len; $index++) {
            $key = $arr[$index];
            $j = $index - 1;
            while ($j >= 0 && $arr[$j] > $key) {
                $arr[$j + 1] = $arr[$j];
                $j--;
            }
            $arr[$j + 1] = $key;
        }
        for ($index = 0; $index < $len; $index++) {
            echo $arr[$index] . " ";
        }
        echo "\n";
        $stop = utility::stopTime();
        $elapsed = utility::elapsedTime($start, $stop);
        echo ($elapsed / 1000) . " sec elasped\n";
        return $elapsed;
    }

    /**function to sort integers using insertion sort for strings */
    public static function insertionSortString($n)
    {
        echo "4 : insertion sort string \n";
        $start = utility::startTime();
        $arr = array();
        echo "enter element in string\n";
        for ($index = 0; $index < $n; $index++) {
            $arr[$index] = utility::getString();
        }
        $len = sizeof($arr);
        for ($index = 1; $index < $len; $index++) {
            $key = $arr[$index];
            $j = $index - 1;
            while ($j >= 0) {
                if (strcmp($key, $arr[$j]) < 0) {
                    break;
                }
                $arr[$j + 1] = $arr[$j];
                $j--;
            }
            $arr[$j + 1] = $key;
        }
        for ($index = 0; $index < $len; $index++) {
            echo $arr[$index] . " ";
        }
        $stop = utility::stopTime();
        $elapsed = utility::elapsedTime($start, $stop);
        echo ($elapsed / 1000) . " sec elasped\n";
        return $elapsed;
    }

    /**function to sort using bubblesort */
    public static function bubbleSorted($n)
    {
        echo " 5 : bubble sort \n";
        $start = utility::startTime();
        $arr = array();
        echo "enter element \n";
        for ($index = 0; $index < $n; $index++) {
            $arr[$index] = utility::getInt();
        }
        $len = sizeof($arr);
        for ($index = 0; $index < $len; $index++) {
            for ($j = $index + 1; $j < $len; $j++) {
                if ($arr[$index] > $arr[$j]) {
                    $temp = $arr[$index];
                    $arr[$index] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }
        for ($index = 0; $index < $len; $index++) {
            echo $arr[$index] . " ";
        }
        $stop = utility::stopTime();
        $elapsed = utility::elapsedTime($start, $stop);
        echo ($elapsed / 1000) . " sec elasped\n";
        return $elapsed;
    }

    /**function to sort using bubblesort for strings */
    public static function bubbleSortString($n)
    {
        echo "6 : bubble sort string\n";
        $start = utility::startTime();
        $arr = array();
        echo "enter element in string\n";
        for ($index = 0; $index < $n; $index++) {
            $arr[$index] = utility::getStringArray();
        }
        $len = sizeof($arr);
        for ($index = 0; $index < $len; $index++) {
            for ($j = $index + 1; $j < $len; $j++) {
                if (strcmp($arr[$index], $arr[$j]) > 0) {
                    $temp = $arr[$index];
                    $arr[$index] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }
        for ($index = 0; $index < $len; $index++) {
            echo $arr[$index] . " ";
        }
        $stop = utility::stopTime();
        $elapsed = utility::elapsedTime($start, $stop);
        echo ($elapsed / 1000) . " sec elasped\n";
        return $elapsed;
    }

    /**function to Search and Sorted List
     */

    public static function startTime()
    {
        $start = round(microtime(true) * 1000);
        echo $start . "\n";
        return $start;
    }
    public static function stopTime()
    {
        $stop = round(microtime(true) * 1000);
        echo $stop . "\n";
        return $stop;
    }
    public static function elapsedTime($start, $stop)
    {
        return $elapsed = $stop - $start;
        unset($start);
        unset($stop);
    }

    /**
     * function to guess the no given by user in 2^n times
     */

    public static function GuessNumber($s)
    {
        $low = 0;
        $high = 1023;
        for ($index = 0; $index < 100; $index++) {
            while ($low <= $high) {
                $mid = round(($low + $high) / 2);
                echo "If your no is bw " . $low . " and " . $mid . " press 1\n";
                echo "If your no is bw " . $mid . " and " . $high . " press 2\n";
                //get user no for choice
                $s = utility::getInt();
                /**
                 * user enters 2 and 1 according to output
                 */

                //if low is high then the no is found
                if ($high == $mid) {
                    echo "your no is " . $high;
                    return $high;
                } else if ($s != 1) {
                    $low = $mid;
                } else {
                    $high = $mid;
                }
            }
        }
    }

    /**
     * function for mergesort
     */

    public static function mergeSort($input)
    {
        $len = count($input);
        /*
         * if input size is 1 then return
         *
         */
        if (count($input) == 1) {
            return $input;
        }

        /**
         * calculate mid
         */
        $mid = floor(count($input) / 2);
        /**
         * divide array into two halves until is size is 1
         */
        $left = array_slice($input, 0, $mid);
        $right = array_slice($input, $mid, $len - 1);
        $left = utility::mergeSort($left);
        $right = utility::mergeSort($right);
        /**
         * merge sort the subarrays
         */
        return utility::merge($left, $right);
    }
    /**
     * function to find  merge operation
     */
    public static function merge($left, $right)
    {
        $res = array();
        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] > $right[0]) {
                $res[] = $right[0];
                /**
                 * The array_slice() function returns selected parts of an array.
                 * returns the values after index 1
                 */

                $right = array_slice($right, 1);
            } else {
                $res[] = $left[0];
                /**
                 * returns the values after index 1
                 */
                $left = array_slice($left, 1);
            }
        }
        while (count($left) > 0) {
            $res[] = $left[0];
            $left = array_slice($left, 1);
        }
        while (count($right) > 0) {
            $res[] = $right[0];
            $right = array_slice($right, 1);
        }
        return $res;
    }

}
