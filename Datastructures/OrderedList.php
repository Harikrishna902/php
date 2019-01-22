<?php
/**********
 *Program to Read the Text from a file, split it into words and arrange it as Linked List.
 *@authour harikrishna
 *@version 2.0
 *Date 22/01/2019
 */

//requires method in Utility to take input and find flips of
require ('utility.php');
require ('LinkedList.php');
class OrderdList
{
     /**
     * function to read ,search, add to the list 
     */
    public static function Search()
    {
         //name of the file
        $filename = "hary143.txt";
        $list = new LinkList();
        $file = fopen($filename, "r") or die("unable to open the file");
        $filstr= fgets($file);
        $filearr = explode(" ",$filstr);
        print_r($filearr);
        //adding to the list
        for ($i = 0; $i < count($filearr); $i++) {
            $list->append($filearr[$i]);
        }
        $elements = utility::getInt();
         //searching the elemnt in the list
         //(===) used for identical values and returns true
        if ($list->Search($elements) === true) {
            echo " element found \n removing element \n";
            $list->remove($elements);
            echo $list->getString();
        } else {
            echo "element not found \n adding element \n";
            $list->add($elements);
            echo $list->getString();
        }
        //writing back to the file
        $file1= fopen($filename,"w");
        fwrite($file1, $list->getString());
    }
}
//calling the method
OrderdList::Search();
//$obj-> new UnorderdList();
//$obj->Search();
?>