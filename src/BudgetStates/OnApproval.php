<?php

namespace Alura\DesignPattern\BudgetStates;

use Alura\DesignPattern\Budget;

class OnApproval extends BudgetState
{
  public function calcExtraDiscount(Budget $budget): float
  {
    return $budget->getValue() * 0.05;
  }

  public function approve(Budget $budget): void
  {
    $budget->setBudgetState(new Approved());
  }

  public function repprove(Budget $budget): void
  {
    $budget->setBudgetState(new Repproved());
  }
}