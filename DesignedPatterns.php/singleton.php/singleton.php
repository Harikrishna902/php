<?php
/**
 *@fileName:bookBorrower.php
 *@Desc:implementing Singleton design pattern by taking book information as example
 *@author harikrishna
 *@version 1.0
 *Date: 7/02/2019
 *********************************************************************************************/
require('/home/admin1/workspace/Harikrishna/DesignedPatterns.php/utility.php');
require('bookBorrower.php');
//require('bookSingleton.php');
/**
 * top level exception handler function to handle exception
 */
// set_exception_handler(function ($e) {
//     echo "\nException Occurred\n";
//     echo $e->getMessage();
// });
class Singleton{
    function main(){
        echo "Enter Author Name: \n";
        $author = utility::getString();
        echo "Enter Title Name: \n";
        $title = utility::getString();
        echo "BEGIN TESTING SINGLETON PATTERN:\n\n";
        //Creating new object for Book BorrowerOne
        $bookBorrowerOne = new bookBorrower($author,$title); 
        //Creating new object for Book BorrowerTwo 
        $bookBorrowerTwo = new bookBorrower($author,$title); 
         //calling borrowBook function for first Object   
        $bookBorrowerOne->borrowBook($author,$title);          
        echo "BookBorrowerOne asked to borrow the book:\n";
        echo "Author and Title: ";
        echo $bookBorrowerOne->getAuthorAndtitle()."\n\n";
         //calling borrowBook function for second Object
        $bookBorrowerTwo->borrowBook($author,$title);     
        echo "BookBorrowerTwo asked to borrow the book:\n";
        echo "Author and Title: ";
        echo $bookBorrowerOne->getAuthorAndtitle()."\n";
        echo $bookBorrowerTwo->getAuthorAndtitle()."\n";
        //calling borrowBook function for first Object
        $bookBorrowerOne->returnBook();                    
        echo "BookBorrowerOne returned the book:\n";
         //calling borrowBook function for second Object
        $bookBorrowerTwo->borrowBook($author,$title);     
        echo "Author and Title: ";
        echo $bookBorrowerOne->getAuthorAndtitle()."\n\n";
        echo "END TESTING SINGLETON PATTERN:\n";
    }
}
  // calling main function
Singleton::main();    
?>