<?php

namespace Alura\DesignPattern\Taxes;

use Alura\DesignPattern\Budget;

class Icms implements Taxe
{
  public function calcTax(Budget $budget): float
  {
    return $budget->value * 0.1;
  }
}
