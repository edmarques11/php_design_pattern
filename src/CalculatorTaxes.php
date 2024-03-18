<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Taxes\Tax;

class CalculatorTaxes
{
  public function calculate(Budget $budget, Tax $tax): float
  {
    return $tax->calcTax($budget);
  }
}
