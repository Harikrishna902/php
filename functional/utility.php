<?php
 /**********
  * Helper function containing methods to use in other php classes
  *@authour harikrishna
  *@version 2.0
  *Date 16/01/2019
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
         * to get input unless its an Intarr;
         */

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
         /**
         * FUNCTION for gambler 
         */

        public static function gambler($stack,$goal,$times){
       
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
        } 

    
         public static function primeFactor($n){
        echo "prime factors are : \n";
        for($num=2;$num<=$n;$num++){ // prime num start from 2
            $flag = TRUE;
            for($j=2;$j<=$num/2;$j++){
                if($num%$j==0){  // it it is divided by zero it's not a prime
                    $flag = FALSE;
                    break;
                }
            }
            if($flag==TRUE){
                while($n%$num==0){
                    echo $num." \n"; // prime numbers divided by inputs
                    $n=$n/$num; 
                }
               
            }
        }
}
    /** function to arrange the el3ements in 2D array*/
    public static function Twoarray($i,$jS){
    for($i=0;$i<$rows;$i++){
        for($j=0;$j<$cols;$j++){
            $twoDArr[$i][$j] =utility::getInt();
        }
    }
    echo "Two dimentional  array is : \n";
    $arr = array_values($twoDArr);
    for($i=0;$i<$rows;$i++){
        for($j=0;$j<$cols;$j++){
            echo $arr[$i][$j]." ";
        }
        echo "\n";
    }
    }




   /**
     * Function to find if no is prime or not
     * @param n the no to check
     * @return true/false if prime or  not
     */
    public static function isPrime($n){
        for ($i = 2; $i <= $n / 2; $i++) {
			if ($n % $i == 0) {
				return false;
			}
        }
        return true ;
    }
      
        

       // wind chill 
        public static function wind($t,$v){
          if($t<50&&$t>3)
        {   
             $windchill=35.74+0.6215*$t+(0.4275*$t-35.75)*(pow($v, 0.16));
            echo $windchill;
        }
        }  
      
       // Quadratic 
         public static function roots($a,$b,$c) {
         $Delta=($b*$b)-(4*$a*$c);
         $root1=(-$b+sqrt($Delta))/2*$a;
         $root2=(-$b-sqrt($Delta))/2*$a;
         echo " the roots are "."\n";
         echo $root1."\n";
         echo $root2."\n";
    }

     
    
         // leap yaear****************
     public static function isLeapyear($year){
          return(($year % 4==0)&&($year % 100!=0)||($year % 400==0));
      }

    /**
     * prints Power of 2
     */ 
    public static function powerOf2($power){
        for($s= 1 ; $s<=$power ; $s++){
            $pow =pow(2,$s);
            echo "\n".$pow;
        }
    }
    
     /****
     *Function to find flip
     * @param head the no to check no of times it flips
     * @param tais the no to check no of times it flips
     */
      public static function flip($trails){
          $head=0;
          $tails=0;
          for($is=0;$is<$trails;$is++){
              if(rand(0,1)>0.5){
                  $head++;

              }
              else
              {
                  $tails++;
              }
          }
          echo "heads is ".$head. "\n";
          echo "tails is ".$tails;
          
          $tailPercent = ($tails/$trails)*100;
          $headsPercent = 100-$tailPercent;
          echo "tails percentage".$tailPercent.PHP_EOL;
          echo "heads percentage".$headsPercent.PHP_EOL;
        
        } 
    }
     ?>