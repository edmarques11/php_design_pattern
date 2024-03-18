<?php

namespace Alura\DesignPattern\BudgetStates;

use Alura\DesignPattern\Budget;

class Approved extends BudgetState
{
  public function calcExtraDiscount(Budget $budget): float
  {
    return $budget->getValue() * 0.02;
  }

  public function finish(Budget $budget): void
  {
    $budget->setBudgetState(new Finished());
  }
}