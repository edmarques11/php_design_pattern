<?php

namespace Alura\DesignPattern\Taxes;

use Alura\DesignPattern\Budget;

class Icpp extends TaxWith2Rates
{
  protected function applayMaxTax(Budget $budget): bool
  {
    return $budget->getValue() > 500;
  }

  protected function calcMaxTax(Budget $budget): float
  {
    return $budget->getValue() * 0.03;
  }

  protected function calcMinTax(Budget $budget): float
  {
    return $budget->getValue() * 0.02;
  }
}
