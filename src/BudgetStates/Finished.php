<?php

namespace Alura\DesignPattern\BudgetStates;

use Alura\DesignPattern\Budget;

class Finished extends BudgetState
{
  public function calcExtraDiscount(Budget $budget): float
  {
    throw new \DomainException('Orçamentos finalizados não podem receber desconto.');
  }
}