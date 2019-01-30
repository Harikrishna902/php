<?php
/****************************************************************************************
 *Program which creates Banking Cash Counter where people come in to deposit Cash and withdraw Cash.
 *@authour harikrishna
 *@version 2.0
 *Date 23/01/2019
 ************************************************************************************************/

require 'utility.php';
require 'queue.php';
/**create object queue */
$queue = new Queue;
echo "enter the number of people to add \n";
/**read number of people to add */
$people = utility::getInt();
$str = "";
$amount = 25000;
echo "enter the name \n";
for ($i = 0; $i < $people; $i++) {
    /**
     *  reading names
     */
    $name = utility::getString();
    /**
     * add to the queue
     */
    $queue->enqueue($name);
}
$queue->display();
echo "are added to queue \n";
/**
 * traverse queue
 */
for ($i = 0; $i < $queue->size(); $i++) {
    $qname = $queue->dequeue();
    // $queue1->enqueue($queue->dequeue());
    echo ($i + 1) . "  " . $qname . "\n";
    /**
     * enter the option
     */
    echo "1: deposit  2: withdrawal 3: quit\n";
    $choice= utility::getInt();
    switch ($choice) {
        /*
         *  read the amount to add
         */
        case 1:echo "enter the amount to deposit\n";
            $depositamount = utility::getInt();
            if ($amount >= $depositamount) {
                $amount += $depositamount;
                echo "balance update " . $amount . "\n";
                // $queue1->enqueue($depositamount);
            } else {
                echo "amount should greater than " . $amount;
            }
            break;
        case 2:echo "enter the amount to withdraw \n";
            $withdrwalamount = utility::getInt();
            $amount -= $withdrwalamount;

            while ($amount < 0) {
                echo "enter lesser amount\n";
                $withdrwalamount = utility::getInt();
            }
            echo $withdrwalamount . " withdrawled \n";
            break;
        case 3:break;
        default:echo "enter valid option\n";
    }
    echo $qname . " dequed " . " \n";
}
