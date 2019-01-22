<?php
/**********
 * Helper function containing methods to use in other php classes
 *@authour harikrishna
 *@version 2.0
 *Date 16/01/2019
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
    /**
     * FUNCTION for gambler
     */

    /*  public static function gambler($stack,$goal,$times){

    $wins=0;
    $bets=0;
    //loop to gamble no of time given by user
    for($i = 0 ; $i <= $times ; $i++){
    $cash = $stack ;
    //loop till player got broke or win
    while($cash>0&&$cash<$goal){
    $bets++;
    $val=rand(0,1);
    if($val<0.5){   //checking the condition
    $cash++;
    }
    else{
    $cash--;
    }
    if($cash==$goal){
    $wins++;
    }
    }
    }
    // display results of gamble
    echo $wins." wins out of ".$times;
    echo "\n total bets : ".$bets."\n" ;
    echo "wins % is ".($wins/$times * 100)."%\n";
    } */
    public static function gambler($stake, $goal, $trials)
    {
        $wins = 0;
        $bets = 0;
        //iterating the loop from 1 to the no of trials user have entered
        for ($index = 1; $index <= $trials; $index++) {
            // assigning the user stake value to cash
            $cash = $stake;
            //checking the condition
            while ($cash > 0 && $cash < $goal) {
                $bets++;
                // genearting the random value by using rand method between 0 and 1
                $value = rand(0, 1);
                echo $value . " \n";
                if ($value < 0.5) {
                    //incrementing the cash value;
                    $cash++;
                } else {
                    // decrementing the cash value;
                    $cash--;
                }
            }
            // comparing the cash and goal values
            if ($cash == $goal) {
                $wins++;
            }
        }
        //printing the no of wins of trials
        echo " the total number of wins  " . $wins . " of trials " . $trials . "\n";
        echo "the percentage of wins is \n" . ($wins / $trials * 100) . "\n";
    }

    /** function to arrange the el3ements in 2D array*/
    public static function Twoarray($rows, $cols)
    {
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                $twoDArr[$i][$j] = utility::getInt();
            }
        }
        echo "Two dimentional  array is : \n";
        $arr = array_values($twoDArr);
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                echo $arr[$i][$j] . " ";
            }
            echo "\n";
        }
    }

    /**
     * function to find nth value of harmonic value
     */

    public static function getHarmonic($value)
    {
        //echo "enter the harmonic number \n";
        //$value =utility::getInt();
        $harmonic = 0.0;
        for ($i = 1; $i <= $value; $i++) {
            $harmonic = $harmonic + (1.0 / $i);
            echo "1" . "/" . $i . "+";
        }
        //secho "\n";
        echo "=" . $harmonic . "\n";
    }

    /**
     * function to find the permutation of a String
     */

    public static function stringPermutation($str)
    {
        echo "permution words are \n";
        //trim=removing characters from both sides
        $str1 = trim($str);
        if (!empty($str)) {
            utility::permuation("", $str1);
        } else {
            echo "enter alteast one character \n";
        }
    }
     public static function permuation($perm,$word){
     if(empty($word)){
    echo $perm.$word."\n"; 
    for($i=0;$i<strlen($word);$i++){
    utility::permuation($perm.$word{$i},substr($word,0,$i).substr($word,$i+1,strlen($word)));
        }
    }
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

    // wind chill
    public static function wind($t, $v)
    {
        if ($t < 50 && $t > 3) {
            $windchill = 35.74 + 0.6215 * $t + (0.4275 * $t - 35.75) * (pow($v, 0.16));
            echo $windchill;
        }
    }

    // Quadratic
    public static function roots($a, $b, $c)
    {
        $Delta = ($b * $b) - (4 * $a * $c);
        $root1 = (-$b + sqrt($Delta)) / 2 * $a;
        $root2 = (-$b - sqrt($Delta)) / 2 * $a;
        echo " the roots are " . "\n";
        echo $root1 . "\n";
        echo $root2 . "\n";
    }

    /** function to  counts the   number of triples that sum to exactly 0*/
    public static function distinctTriplets($n)
    {
        $arr = array();
        echo "enter the elements \n";
        for ($i = 0; $i < $n; $i++) {
            //enter the elements to array
        }
        $arr[$i] = utility::getInt();
        $totalDistinct = 0;
        for ($i = 0; $i < sizeof($arr); $i++) {
            for ($j = $i + 1; $j < sizeof($arr); $j++) {
                for ($k = $j + 1; $k < sizeof($arr); $k++) {
                    //sum of three values of arry is equal to 0
                    if (($arr[$i] + $arr[$j] + $arr[$k]) == 0) {
                        echo $arr[$i] . " ", $arr[$j] . " " . $arr[$k] . " ";
                        $totalDistinct++;
                    }
                }
            }
        }
        echo "\n total distinct triplets are " . $totalDistinct . "\n";
    }

    /**
     * function to find the leap year
     */
    public static function isLeapyear($year)
    {
        return (($year % 4 == 0) && ($year % 100 != 0) || ($year % 400 == 0));
    }

    /**
     * prints Power of 2
     */
    public static function powersof2($number)
    {
        for ($index = 1; $index <= $number; $index++) {
            echo (pow(2, $index) . "\n"); // calcuating the power value
        }
    }

    /****
     *Function to find flip
     * @param head the no to check no of times it flips
     * @param tais the no to check no of times it flips
     */
    public static function flip($trails)
    {
        $head = 0;
        $tails = 0;
        for ($is = 0; $is < $trails; $is++) {
            if (rand(0, 1) > 0.5) {
                $head++;

            } else {
                $tails++;
            }
        }
        echo "heads is " . $head . "\n";
        echo "tails is " . $tails;
        $tailPercent = ($tails / $trails) * 100;
        $headsPercent = 100 - $tailPercent;
        echo "tails percentage" . $tailPercent . PHP_EOL;
        echo "heads percentage" . $headsPercent . PHP_EOL;

    }

    public static function primeFactors($number)
    {
        //firstly dividing the num by 2 until the loop terminates
        while ($number % 2 == 0) {
            echo "2";
            // again the number is dividing by 2 to get quotient value
            $number = $number / 2;
        }
        //iterates the loop with only prime numbers
        for ($index = 3; $index <= $number; $index = $index + 2) {
            while ($number % $index == 0) {
                echo $index . " ";
                echo "\n";
                //dividing the number by index of prime value
                $number = $number / $index;
            }
        }
    }
}
