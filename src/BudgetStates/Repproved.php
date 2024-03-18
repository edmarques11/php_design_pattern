<?php

namespace Alura\DesignPattern\BudgetStates;

use Alura\DesignPattern\Budget;

class Repproved extends BudgetState
{
  public function calcExtraDiscount(Budget $budget): float
  {
    throw new \DomainException('Orçamentos reprovados não podem receber desconto.');
  }

  public function finish(Budget $budget): void
  {
    $budget->setBudgetState(new Finished());
  }
}