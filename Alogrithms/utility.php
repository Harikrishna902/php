<?php
 /**********
  * Helper function containing methods to use in other php classes
  *@authour harikrishna
  *@version 2.0
  *Date 17/01/2019
  */
  class utility{
    /**
     * to get input unless its an integere
     */
    public static function getInt(){
        fscanf(STDIN,"%s \n",$val);
        if($val==0){
        while( !is_numeric($val)){
        echo "ivalid input try again\n";
        fscanf(STDIN," %s\ n ",$val);
        }
        return $val;
        }
        else{
        while( !is_numeric($val) || $val/(int)$val>1){
        echo "ivalid input try again\n";
        fscanf(STDIN," %s\n ",$val);
        }
        return (int)$val;
        }
    }

     /**
     * to get input unless its an boolean value
     */
    public static function getBoolean(){
        fscanf(STDIN,"%s\n",$val);
        while($val!=='t' && $val!=='f'){
        echo "ivalid input try again\n";
        fscanf(STDIN," %s\n ",$val);
        }
        return $val;
        }
        
        /**
         * to get input unless its an decimal value
         */
            public static function getDouble(){
            fscanf(STDIN,"%f\n",$val);
            while(!is_float($val)){
            echo "ivalid input try again\n";
            fscanf(STDIN," %f\n ",$val);
            }
            return $val;
            }

        /**
          * to get input unless its an float
         */
         public static function getfloat(){
        fscanf(STDIN,"%f",$val);
        while(!is_float($val)){
            echo "invalid input try again \n";
            fscanf(STDIN," %d ",$val);
        }
        return $val;
    }
       
        /**
         * to get input unless its an String
         */

        public static function getString(){
            fscanf(STDIN,"%s",$val);
            while(is_numeric($val)){
            echo "invalid input try again \n";
            fscanf(STDIN," %s ",$val);
            }
                return $val;
        }

        public static function getIntArr(){
            echo "enter array size";
            $size = Utility::getInt();
            $arr = array();
            echo "enter array value ";
            for($i = 0 ; $i < $size ; $i++ ){
                $arr[$i] = Utility::getInt(); 
            }
            return $arr ;
    }
        /**
         * Detects if given strings are anagrams or not
         * @param s1 the first string
         * @param s2 the second string to check
         * @return true/false if anagrram or not
         * 
         */
        static function isAnagram($s1,$s2){
        $len1=strlen($s1);
        $len2=strlen($s2);
        if($len1==$len2)
        {
            $array1=str_split($s1);
            $array2=str_split($s2);
            sort($array1);
            sort($array2);
            $s3=implode("",$array1);
            $s4=implode("",$array2);
            if($s3==$s4)
            {
                echo " strings are anagram to each other"."\n";
            }
            else
            {
                echo "strings are not anagrams"."\n";
            }
        
    }
     }
   
        /**
        * Function to find if no is prime or not
        * @param n the no to check
        * @return true/false if prime or  not
        */
         static function isPrime($n){
        for ($i = 2; $i <= $n / 2; $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true ;
    }
        /**
        * Function to search binary integer in an array
        */
        static function linear($n , $arr){
        sort($arr);
        $size = count($arr);
        for($i=0 ; $i<$size ; $i++){
            if($arr[$i]==$n){
                return $i ;
            }
        }
        return false ;
    }
    
   
        /**
        * Function to sort integer array using insertion sort
        * @param arr the array to be sorted
        * @return arr sorted array
        */
    static function insertionSort($arr){
        //gets the size of array
        $size = count($arr);
        for($i = 1 ;$i <$size ; $i++){
            // getting value for back element
            $j = ($i - 1);
            //saving it in temperary variable;
            $temp = $arr[$i];
            while($arr[$j]>$temp&&$j>=0){
                $arr[$j+1] = $arr[$j];
                $j--; 
            }
            $arr[$j+1] = $temp ;
        }
        return $arr;
    }
    
        /**
        * Function to sort an array of string
        * 
        * @param arr array tobe sorted 
        * @return arr sorted array
        */
        static function insSortString  ($arr){
        //gets the size of array
        $size = count($arr);
        for($i = 1 ;$i <$size ; $i++){
         // getting value for back element
        $j = ($i - 1);
        //saving it in temperary variable;
        $temp = $arr[$i];
        while(strcmp($arr[$j],$temp)>0&&$j>=0){
            $arr[$j+1] = $arr[$j];
             $j--; 
          }
          $arr[$j+1] = $temp ;
      }
      return $arr;
  }
    /**
    * Function to sort integer array using bubble sort algorithm
    * 
    * @param arr the array to be sorted
    * @return arr sorted array 
    */
    static function bubbleSort($arr){
        $n = sizeof($arr); 
        $temp;
        // Traverse through all array elements 
        for($c= 0; $c < $n-1; $c++)  
        { 
            // Last i elements are already in place 
            for ($i = 0; $i < $n -2; $i++)  
            { 
                // traverse the array from 0 to n-i-1 
                // Swap if the element found is greater than previous element
                // than the next element 
                if ($arr[$i] > $arr[$i+1]) 
                { 
                    $temp = $arr[$i]; 
                    $arr[$i] = $arr[$i+1]; 
                    $arr[$i+1] = $temp; 
                } 
            } 
        } 
        return $arr;
    }
      /** 
     * static function calculating day of week using below formula and returning it
     * 
     * @return d0 the day of the week
     */
    static function dayOfWeek($d , $m , $y){
        $y0 = floor($y - (14 - $m) / 12) +1 ;
        $x = floor($y0 + $y0/4 - $y0/100 + $y0/400);
        $m0 = ($m + 12 * floor(((14 - $m) / 12)) - 2);
        $d0 = floor(($d + $x + floor((31*$m0) / 12)) % 7) ;
        return $d0;
    }

    /**
     * Function to calculate temperature from celcius to fahrenhiet and vice-versa
     * 
     * @param temp the temperature to convert 
     * @param chtemp the character containing the c or f for temp 
     * @return conv the converted temperature 
     */
    static function tempconv($temp , $chtemp){
        if(strpos($chtemp , "c")===false&&strpos($chtemp , "C")===false){
            $conv =  ($temp * 9/5) + 32 ; 
        }
        else{
            $conv =  ($temp - 32) * 5/9 ; 
        }
        return $conv ;
    }

    /**
     * Function to find squre root of a no using newtons method
     * 
     * @param c the integer no of which to find square root 
     * @return c the value of square root
     */
    static function sqrt($c){
        $t = $c ;
        $epsilon = 1e-15 ;
        while(abs($t-($c/$t))>$epsilon*$t){
            $t = ($c/$t + $t)/2 ;
        }
        return $t ;
    }


     /**
     * function to calculate the monthly payment using compund interest formula
     */
        static function monthlyPayment($p,$r,$R){
        $r = $R/(12*100);
        $n = 12* $y;
        $payment = ($p*$r)/(1-(1+$r)**(-$n));
        return $payment ;
    }    
    /**
     * function to calculate the notes using vending machine
     */    

     static function calcnotes($array1,$money){
       
        $index=0;
         while($money>0){
             while($money>=$array1[$index])
                 {
                $notes=floor($money/$array1[$index]);
                echo $array1[$index]."notes are".$notes."\n";
                $money=floor($money%$array1[$index]); 
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
        public static  function toBinary($decimal){
            $result="";
            while($decimal>1){
            $result=$result.($decimal%2);
            $decimal=$decimal/2;
            //$decimal=round($decimal/2,0,PHP_ROUND_HALF_DOWN);
        }
        return $result;
        }

        /**
         * function to convert binary to decimal         * 
         * @param Binary integer to convert
         * @return Integer the value of integer
         */
         public static function Bintodec($result){
             $resultArr=str_split($result);
             $decimal=0;
             $i=0;
             for($j=count($resultArr)-1;$j>=0;$j--){
                 if($resultArr[$j]==1){
                   $decimal = $decimal.pow(2,i)  ;
                    }
                    $i++;
                }
                echo $decimal ;
                return $decimal ;
            }
        }

  
       





?>
