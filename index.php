<?php

use Alura\DesignPattern\{Budget, CalculatorTaxes};
use Alura\DesignPattern\Taxes\{Iss, Icms};

require 'vendor/autoload.php';

$calculator = new CalculatorTaxes();

$budget = new Budget();
$budget->value = 100;

echo $calculator->calculate($budget, new Iss());
