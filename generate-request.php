<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\CreateRequest;
use Alura\DesignPattern\CreateRequestHandler;

$budgetValue = $argv[1];
$itemsNumber = $argv[2];
$clientName = $argv[3];

$createRequest = new CreateRequest($budgetValue, $itemsNumber, $clientName);
$createRequestHandler = new CreateRequestHandler();
$createRequestHandler->execute($createRequest);
