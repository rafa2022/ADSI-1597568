<?php

require '../src/class/calculator1.php';

use calculator1PHP\calculator1;

$n1 = (float) $_GET['n1'];
$n2 = (float) $_GET['n2'];
$operation = (int) $_GET['operation'];
$calc = new calculator1();
$calc->setNumber1($n1);
$calc->setNumber2($n2);

switch ($operation) {
    case 0:
        $menssage = "Please select an operation.";
        break;
    case 1:
        $menssage = "The sum between " . $n1 . " and " . $n2 . " is " . $calc->sum();
        break;
    case 2:
        $menssage = "The subtraction between " . $n1 . " and " . $n2 . " is " . $calc->subtraction();
        break;
    case 3:
        $menssage = "The multiplication between " . $n1 . " and " . $n2 . " is " . $calc->multiplication();
        break;
    case 4:
             $menssage = "The division between " . $n1 . " and " . $n2 . " is " . $calc->division();     
        break;
    case 5:
           $menssage = "The division module between " . $n1 . " and " . $n2 . " is " . $calc->sum();         
        break;
    case 6:
        $menssage = "The logarithm  between " . $n1 . " is " . $calc->log();
        break;
    case 7:
        $menssage = "The square root  between " . $n1 . " is " . $calc->squareRoot();
        break;
    case 8:
        $menssage = "The umpteenth root between " . $n1 . " and " .$n2." is ". $calc->umpteenthRoot();
        break;
    case 9:
        $menssage = "Number " . $n1 . " squared is " . $calc->elevate2();
        break;
    case 10:
        $menssage = "Number " . $n1 . " raised to " .$n2. $calc->raisedTo();
        break;
}
require 'result.php';
