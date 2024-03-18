<?php

namespace Alura\DesignPattern\Taxes;

use Alura\DesignPattern\Budget;

abstract class TaxWith2Rates implements Tax
{
  public function calcTax(Budget $budget): float
  {
    if ($this->applayMaxTax($budget)) return $this->calcMaxTax($budget);

    return $this->calcMinTax($budget);
  }

  abstract protected function applayMaxTax(Budget $budget): bool;

  abstract protected function calcMaxTax(Budget $budget): float;

  abstract protected function calcMinTax(Budget $budget): float;
}
