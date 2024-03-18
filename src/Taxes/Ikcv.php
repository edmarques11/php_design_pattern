<?php

namespace Alura\DesignPattern\Taxes;

use Alura\DesignPattern\Budget;

class Ikcv extends TaxWith2Rates
{
  protected function applayMaxTax(Budget $budget): bool
  {
    return $budget->getValue() > 500 && $budget->getQtdItems() > 1;
  }

  protected function calcMaxTax(Budget $budget): float
  {
    return $budget->getValue() * 0.04;
  }

  protected function calcMinTax(Budget $budget): float
  {
    return $budget->getValue() * 0.025;
  }
}
