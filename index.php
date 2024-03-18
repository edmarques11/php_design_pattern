<?php

use Alura\DesignPattern\Budget;
use Alura\DesignPattern\CalculatorTaxes;
use Alura\DesignPattern\Taxes\Ikcv;

require 'vendor/autoload.php';

$calculator = new CalculatorTaxes();
$budget = new Budget(800, 1);

echo $calculator->calculate($budget, new Ikcv());
