<?php
// # Delete CreditCard Sample
// This sample code demonstrate how you can
// delete a saved credit card.
// API used: /v1/vault/credit-card/{<creditCardId>}
// NOTE: HTTP method used here is DELETE

/** @var CreditCard $card */
$card = require 'CreateCreditCard.php';
use PayPal\Api\CreditCard;

try {
    // ### Delete Card
    // Lookup and delete a saved credit card.
    // (See bootstrap.php for more on `ApiContext`)
    $creditCard = CreditCard::get($card->getId(), $apiContext);

    $creditCard->delete($apiContext);
} catch (Exception $ex) {
    ResultPrinter::printError("Delete Credit Card", "Credit Card", null, null, $ex);
    exit(1);
}

ResultPrinter::printResult("Delete Credit Card", "Credit Card", $card->getId(), null, $creditCard);
