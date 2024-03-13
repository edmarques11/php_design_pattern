<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Taxes\Taxe;

class CalculatorTaxes
{
  public function calculate(Budget $budget, Taxe $taxe): float
  {
    return $taxe->calcTax($budget);
  }
}
