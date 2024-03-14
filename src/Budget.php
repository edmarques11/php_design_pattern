<?php

namespace Alura\DesignPattern;

class Budget
{
  public function __construct(private float $value, private int $qtdItems)
  {
  }

  public function getValue(): float
  {
    return $this->value;
  }

  public function getQtdItems(): int
  {
    return $this->qtdItems;
  }
}
