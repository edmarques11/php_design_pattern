<?php

namespace Alura\DesignPattern\Discounts;

use Alura\DesignPattern\Budget;

class DiscountMore5Items extends Discount
{
  public function calculate(Budget $budget): float
  {
    if ($budget->getQtdItems() > 5) return $budget->getValue() * 0.1;

    return $this->nextDiscount->calculate($budget);
  }
}