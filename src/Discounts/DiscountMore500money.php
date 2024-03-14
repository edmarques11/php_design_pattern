<?php

namespace Alura\DesignPattern\Discounts;

use Alura\DesignPattern\Budget;

class DiscountMore500money extends Discount
{
  public function calculate(Budget $budget): float
  {
    if ($budget->getValue() > 500) return $budget->getValue() * 0.05;

    return $this->nextDiscount->calculate($budget);
  }
}
