<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Discounts\{DiscountMore5Items, DiscountMore500money, WithoutDiscount};

class CalculatorDiscounts
{
  public function calculate(Budget $budget): float
  {
    $withoutDiscount = new WithoutDiscount();
    $discountMore500money = new DiscountMore500money($withoutDiscount);
    $discountMore5Items = new DiscountMore5Items($discountMore500money);

    $chainDiscounts = $discountMore5Items;

    return $chainDiscounts->calculate($budget);
  }
}
