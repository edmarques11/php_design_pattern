<?php

use Alura\DesignPattern\Budget;
use Alura\DesignPattern\CalculatorDiscounts;

require 'vendor/autoload.php';

$calculator = new CalculatorDiscounts();
$budget = new Budget(600, 4);

echo $calculator->calculate($budget);
