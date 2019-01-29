<?php
/**********
 *Program to Read the Text from a file, split it into words and arrange it as Linked List.
 *@authour harikrishna
 *@version 2.0
 *Date 22/01/2019
 *****************************************************************************************************/

/**
 * requried to get input from another class
 */
require 'utility.php';
require 'linkedList.php';
class unorderdList
{
    /**
     * function to read ,search, add to the list
     */
    public static function Search()
    {
        /**
         * name of the file
         */
        $filename = "word.txt";
        $list = new linkedList();
        $file = fopen($filename, "r") or die("unable to open the file");

        /**
         * returns the elements from a open file
         */
        $filstr = fgets($file);
        $filearr = explode(" ", $filstr);
        print_r($filearr);

        /**
         * adding to the list
         */
        for ($i = 0; $i < count($filearr); $i++) {
            $list->add($filearr[$i]);
        }
        echo " enter the element to search \n";
        $elements = utility::getString();

        /**
         * searching the elemnt in the list
         *(===) used for identical values and returns true
         */
        if ($list->Search($elements) === true) {
            echo " element found \n removing element \n";
            $list->remove($elements);
            echo $list->getData();
        } else {
            echo "element not found \n adding element \n";
            $list->add($elements);
            echo $list->getData();
        }
        /**
         * /writing back to the file
         */
        $file1 = fopen($filename, "w");
        fwrite($file1, $list->getData());
    }
}
/**
 * calling the method
 */
unorderdList::Search();
//$obj-> new unorderdList();
//$obj->Search();
