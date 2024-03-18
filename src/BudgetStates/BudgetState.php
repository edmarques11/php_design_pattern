<?php

namespace Alura\DesignPattern\BudgetStates;

use Alura\DesignPattern\Budget;

abstract class BudgetState
{
  /**
   * @throws \DomainException
   */
  abstract public function calcExtraDiscount(Budget $budget): float;

  public function approve(Budget $budget): void
  {
    throw new \DomainException('Esse orçamento não pode ser aprovado');
  }

  public function repprove(Budget $budget): void
  {
    throw new \DomainException('Esse orçamento não pode ser reprovado');
  }

  public function finish(Budget $budget): void
  {
    throw new \DomainException('Esse orçamento não pode ser finalizado');
  }
}
