<?php

namespace Alura\DesignPattern;

class CreateRequest
{
  public function __construct(
    private readonly float $budgetValue,
    private readonly int $itemsNumber,
    private readonly string $clientName
  ) {
  }

  public function getBudgetValue(): float
  {
    return $this->budgetValue;
  }

  public function getItemsNumber(): int
  {
    return $this->itemsNumber;
  }

  public function getClientName(): string
  {
    return $this->clientName;
  }
}
