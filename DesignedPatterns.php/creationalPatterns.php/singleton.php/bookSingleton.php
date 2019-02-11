<?php
/**
 *@fileName:BookSingleton.php
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
//require 'utilty.php';
class BookSingleton
{
    private $author;
    private $title;
    private static $book = null;
    private static $check = false;
    /**
     * Initialization of  Private Constructor that restrict the accessing of object from another class
     */
    private function __construct($author, $title)
    {
        $this->author = $author;
        $this->title = $title;
    }
     /**
      * function for  static Lazy initialization 
      */
    public static function borrowBook($author, $title)
    {
        if (false == self::$check) {
            if (null == self::$book) {
                self::$book = new BookSingleton($author, $title);
            }
            self::$check = true;
            return self::$book;
        } else {
            return null;
        }
    }
    /**
     * function to get book details
     */
    public function returnBook(BookSingleton $bookReturned)
    {
        self::$check = false;
    }
    /**
     * function to get author
     */
    public function getAuthor()
    {
        return $this->author;
    }
    /**
     * function to get title
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * function to get both author and title
     */
    public function getAuthorAndtitle()
    {
        return $this->getTitle() . ' by '. $this->getAuthor();
    }
}
