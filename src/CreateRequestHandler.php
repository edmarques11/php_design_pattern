<?php

namespace Alura\DesignPattern;

class CreateRequestHandler
{
  public function __construct()
  {
  }

  public function execute(CreateRequest $createRequest): void
  {
    $budged = new Budget($createRequest->getBudgetValue(), $createRequest->getItemsNumber());
    $request = new Request();
    $request->clientName = $createRequest->getClientName();
    $request->dateFinish = new \DateTimeImmutable();
    $request->budget = $budged;

    echo 'Request created!' . PHP_EOL;
  }
}
