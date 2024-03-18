<?php

namespace Alura\DesignPattern\Taxes;

use Alura\DesignPattern\Budget;

class Iss implements Tax
{
  public function calcTax(Budget $budget): float
  {
    return $budget->getValue() * 0.06;
  }
}
