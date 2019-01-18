<?php
  /**********
  *function to convert decimal number to binary and again that binary to decimal
  *@authour harikrishna
  *@version 2.0
  *Date 17/01/2019
  */
  require('utility.php');
  class toBinary
  {
    static function convert(){
        echo "Enter the number ";
        $decimal = utility::getInt();
        echo "Binary no is  : \n";\
        utility::toBinary($decimal);
    }
}
$obj=new toBinary();
$obj->convert();
    
//toBinary::convert();


?>

  