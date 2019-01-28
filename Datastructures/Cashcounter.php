<?php
/**********
 *Program which creates Banking Cash Counter where people come in to deposit Cash and withdraw Cash.
 *@authour harikrishna
 *@version 2.0
 *Date 23/01/2019
 */

require 'utility.php';
require 'Queue.php';
$counter = function () {
    $deposit = function ($amount, $depos) {
        $depos[0] += $amount;
        $depos[1]++;
        return $depos;
    };

    $withdraw = function ($amount, $withd) {
        $withd[0] += $amount;
        $withd[1]++;
        return $withd;
    };
};

$q = new Queue();
echo "enter  total people in queue \n";
$people = utility::getInt();
echo "enter names \n";
$names = utility::getString();
for ($i = 0; $i < $people; $i++) {
    echo " 1 to deposit and 2 to withdrwal \n";
    $n = utility::getInt();
    if ($n == 1) {
        echo " enter amount \n";
        $amount = utility::getInt();
        $q->enqueue($amount);
    } else if ($n == 2) {
        echo " enter the amount \n";
        $amount = utility::getInt();
        $q->enqueue($amount * -1);
    } else {
        echo "enter valid input \n";
        $i--;
    }
}
$withd = array();
$depos = array();
while (!$q->isEmpty()) {
    $amount = $q->dequeue();
    if ($amt < 0) {
        $withd = $withdraw($amt, $withd);
    } else {
        $depos = $deposit($amt, $depos);
    }
}
echo " Bank counter status \n";
echo " Total Deposits :" . depos[1] . "\n";
echo " Total Deposited amount =" . (int) $depos[0] . "\n";
echo "Total Withdrawls:" . $withd[1] . "\n";
echo "Total withdrawl Amount=" . ((int) $withd[0] * -1) . "\n";
