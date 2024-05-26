<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{Budget, Request};

$budgetValue = $argv[1];
$itemsNumber = $argv[2];
$clientName = $argv[3];

$budged = new Budget($budgetValue, $itemsNumber);
$request = new Request();
$request->clientName = $clientName;
$request->dateFinish = new \DateTimeImmutable();
$request->budget = $budged;

echo 'Request created!' . PHP_EOL;
