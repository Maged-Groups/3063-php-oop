<?php

require_once __DIR__ . '/bootstrap/app.php';

use App\Store;
///////////////////

$alex1 = new Store('Alex Branch 1', 5000);

$alex1->report();

$alex1->add_invoice(1000);
$alex1->add_invoice(180);
$alex1->add_invoice(20);
$alex1->report();

$cairo1 = new Store('Cairo Branch 1', 10000);

// $cairo1->report();
$alex1->report();

$cairo1->add_invoice(320);
$cairo1->add_invoice(160);
// $cairo1->report();

$alex1->report();

$cairo1->refund(100);

// $cairo1->report();

$alex1->report();


Store::general_report();
Store::general_report();
Store::general_report();
Store::general_report();
Store::general_report();
Store::general_report();
Store::general_report();
Store::general_report();

// sdsds