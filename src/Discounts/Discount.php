<?php

namespace Alura\DesignPattern\Discounts;

use Alura\DesignPattern\Budget;

abstract class Discount
{
  public function __construct(protected ?Discount $nextDiscount)
  {
  }

  abstract public function calculate(Budget $budget): float;
}
