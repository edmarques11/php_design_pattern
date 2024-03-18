<?php

namespace Alura\DesignPattern\Taxes;

use Alura\DesignPattern\Budget;

interface Tax
{
  public function calcTax(Budget $budget): float;
}
