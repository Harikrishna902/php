<?php
/**********
 *Program to Read the Text from a file, split it into words and arrange it as Linked List.
 *@authour harikrishna
 *@version 2.0
 *Date 22/01/2019
 */

//requires method in Utility to take input and find flips of
require 'utility.php';
require 'linkedList.php';
class orderdList
{
    /**
     * function to read ,search, add to the list
     */
    public static function Search()
    {
        /**
         * name of the file
         */
        $filename = "number.txt";
        $list = new linkedList();
        /**
         * opens the file and reads the data
         */
        $file = fopen($filename, "r") or die("unable to open the file");
        $filstr = fgets($file);
        /**
         * converting  string to array
         */
        $filearr = explode(" ", $filstr);
        sort($filearr);
        print_r($filearr);

        /**
         * adding to the list
         */
        for ($i = 0; $i < count($filearr); $i++) {
            $list->add($filearr[$i]);
        }
        echo " enter element to search \n";
        $elements = utility::getInt();

        /**
         * searching the elemnt in the list
         *(===) used for identical values and returns true
         */
        if ($list->Search($elements) === true) {
            echo " element found \n removing element \n";

            /**
             * removing elements from list
             */
            $list->remove($elements);

            /**
             * getting the data from list
             */
            echo $list->getData();
        } else {
            echo "element not found \n adding element \n";
            $list->add($elements);
            echo $list->getData();
        }
        /**
         * writing back to the file
         */
        $file1 = fopen($filename, "w");
        fwrite($file1, $list->getData());
    }
}
/**
 * calling the method
 */
orderdList::Search();
//$obj-> new UnorderdList();
//$obj->Search();
