<?php

namespace Alura\DesignPattern\Taxes;

use Alura\DesignPattern\Budget;

class Iss implements Taxe
{
  public function calcTax(Budget $budget): float
  {
    return $budget->value * 0.06;
  }
}
