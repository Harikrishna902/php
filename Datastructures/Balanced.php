<?php
/**********
 * To Ensure parentheses must appear in a balanced fashion.
 *@authour harikrishna
 *@version 2.0
 *Date 23/01/2019
 */
require('utility.php');
require('Stack.php');
$stack=new Stack;
$expression="(5+6)∗(7+8)/(4+3)(5+6)∗(7+8)/(4+3))";
//echo "enter the Arthamatic Expression \n";
$arr=str_split($expression);
$exp=true;
for($i=0;$i<sizeof($arr);$i++){
$expression=$arr{$i};
 if($expression=='('){
           $stack->push($exp);
    }
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
