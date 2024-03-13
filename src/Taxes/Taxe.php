<?php

namespace Alura\DesignPattern\Taxes;

use Alura\DesignPattern\Budget;

interface Taxe
{
  public function calcTax(Budget $budget): float;
}
