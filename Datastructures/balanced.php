<?php
/**********
 * To Ensure parentheses must appear in a balanced fashion.
 *@authour harikrishna
 *@version 2.0
 *Date 23/01/2019
 */

 /**
 * requried to get input from another class
 */
require('utility.php');
require('Stack.php');
$stack=new Stack;
$expression="(5+6)∗(7+8)/(4+3)(5+6)∗(7+8)/(4+3))";

//echo "enter the Arthamatic Expression \n";
/**
 * splitting the expression 
 */
$arr=str_split($expression);
$exp=true;
for($i=0;$i<sizeof($arr);$i++){
$expression=$arr{$i}; 

/**
 * condition to push the elemnts 
*/
 if($expression=='('){
           $stack->push($exp);
    }
    /**
     * condition to pop the elements
     */
    else if($exp==')'){
        if($stack->isEmpty()){
            $exp=false;
        }
        else{
            $stack->pop();
        }
            
    }
}
            
   
if($exp){
  echo " balanced paranthesis(True)\n";

}
else
{
    echo "not balanced paranthesis(false) \n";

}
?>
