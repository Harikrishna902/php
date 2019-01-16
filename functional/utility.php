<?php
 /**********
  * Helper function containing methods to use in other php classes
  *@authour harikrishna
  *@version 2.0
  *Date 16/01/2019
  */
  class utility{
     /**
     * to get input unless its an integer
     */
        public static function getInt(){
         fscanf(STDIN,"%d",$val);
         while(!is_numeric($val)){
             echo "invalid input try again \n";
             fscanf(STDIN," %d ",$val);
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
      
    public static function Windchill($temperature,$speed){
    $w =  35.74 + 0.62158 * $f + (0.4275 * $f - 35.75) * $ws**0.16;
    return$w;
    }

    public static function root($a,$b,$c){
        $delta = $b*$b-4*$a*$c;
        $delta = abs($delta);
        $root1 = (-$b + sqrt($delta))/(2*$a);
        $root2 = (-$b - sqrt($delta))/(2*$a);
        echo ("root1 equation" + root1);
	    echo ("root2 equation" + root2 );
    }
    
     
     /**
     * to get input unless its an String
     */

     public static function getString(){
        fscanf(STDIN,"%s",$val);
        while(!is_String($val)){
            echo "invalid input try again \n";
            fscanf(STDIN," %s ",$val);
        }
        return $val;
    }

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
       
        } 
    }

       

  ?>