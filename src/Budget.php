<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\BudgetStates\BudgetState;
use Alura\DesignPattern\BudgetStates\OnApproval;

class Budget
{
  public function __construct(
    private float $value,
    private int $qtdItems,
    private BudgetState $currentState = new OnApproval()
  ) {
  }

  public function applayExtraDiscount(): void
  {
    $this->value -= $this->currentState->calcExtraDiscount($this);
  }

  public function approve(): void
  {
    $this->currentState->approve($this);
  }

  public function repprove(): void
  {
    $this->currentState->repprove($this);
  }

  public function finish(): void
  {
    $this->currentState->finish($this);
  }

  public function getValue(): float
  {
    return $this->value;
  }

  public function getQtdItems(): int
  {
    return $this->qtdItems;
  }

  public function getCurrentState(): BudgetState
  {
    return $this->currentState;
  }

  public function setBudgetState(BudgetState $newState): void
  {
    $this->currentState = $newState;
  }
}
