<?php
/**
 *@fileName:bookBorrower.php
 *@Desc:implementing Singleton design pattern by taking book information as example
 *@author harikrishna
 *@version 1.0
 *Date: 7/02/2019
 *********************************************************************************************/
/**
 * top level exception handler function to handle exception
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
});
require 'bookSingleton.php';
class bookBorrower
{
    private $borrowedBook;
    private $haveBook;

    /**
     * intiliation of constructor
     */
    public function __construct($author, $title)
    {
        $this->author = $author;
        $this->title = $title;
    }

    public function AuthorAndTitle()
    {
        if (true == $this->haveBook) {
            return $this->borrowedBook->getAuthorAndtitle();

        } else {
            return "I dont have the book";
        }
    }
    public function borrowBook($author,$title)
    {
        $this->borrowedBook = bookSingleton::borrowBook($author,$title);
        if ($this->borrowedBook == null) {
            $this->haveBook = false;
        } else {
            $this->haveBook = true;
        }
    }
    public function returnBook()
    {
        $this->borrowedBook->returnBook($this->borrowedBook);
    }

}
