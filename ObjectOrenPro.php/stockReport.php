<?php
/**
 *@fileNanme:stockReport.php
 *@Description:to read in Stock Names, Number of Share, Share Price.
 *Print a Stock Report with total value of each Stock and the total value of Stock.
 *Wheats with properties name, weight, price per kg.
 *@author harikrishna
 *@version 2.0
 *Date :5/01/2019
 *********************************************************************************************/
require 'utility.php';
class Stock
{
    //var to store the data of stock
    public $name;
    //price of stack
    public $price;

    //quantity of share in the stock
    public $quantity;

    //constructor to initialize the variables in the class
    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
}

/**
 * function to add data to the json file portfolio
 */
function portfolio($portfolio)
{
    echo "Enter no of stocks to add ";
    $stockValue = utility::getInt();
    for ($i = 0; $i < $stockValue; $i++) {
        echo "Enter Stock name :";
        $name = utility::getString();
        echo "Enter number of Shares of $name :";
        $quantity = utility::getInt();
        echo "Enter price of a share of $name:";
        $price = utility::getInt();
        $portfolio[] = new Stock($name, $price, $quantity);
    }
    printReport($portfolio);
    $js = json_encode($portfolio);
    //print_r($js);
    file_put_contents("stock.json", $js);
}

/**
 * Function to print the report read from the json text file
 */
function printReport($portfolio)
{
    $total = 0;
    echo "Stock Name | Per Share Price | No. Of Shares | Stock Price\n";
    foreach ($portfolio as $key) {
        //The sprintf() function writes a formatted string to a variable.
        echo sprintf("%-10s | rs %-12u | %-13u | rs %u", $key->name, $key->price, $key->quantity, ($key->quantity * $key->price)) . "\n";
        $total += ($key->quantity * $key->price);
    }
    echo "Total Value Of Stocks is : " . $total . " rs";
}

/**
 * function to create new portfolio
 */
function newPort()
{
    $portfolio = array();
    portfolio($portfolio);
}

//function to add stock to old port folio
function add()
{
    echo "Adding New Elements Selected\n";
   $portfolio = json_decode(file_get_contents("stock.json"));
    //print_r($portfolio);
    portfolio($portfolio);
}

/**
 *  function to run and test the above functions
 */
function run()
{
    //asks the user for input
    echo "Menu :\n";
    echo "Press 1 to Enter New Details in Stock Portfolio \nPress 2 to to clear and create new Portfolio \n";
    echo "Enter 3 to Display Old Shares With Report\nElse exit anything to exit\n";
    $choice = utility::getInt();
    //switch case to run according to condition
    switch ($choice) {
        case '1':
            add();
            echo "\n\n";
            run();
            break;
        case '2':
            newPort();
            echo "\n\n";
            run();
            break;
        case '3':
            $portfolio = json_decode(file_get_contents("stock.json"));
            printReport($portfolio);
            utility::getString();
            break;
        default:
            echo "Exit  ..!!!\n";
            break;
    }
}
//function to run the class
run();