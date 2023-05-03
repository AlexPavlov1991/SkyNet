<?php

require_once(__DIR__ . "/vendor/autoload.php");

use App\classes\TariffType;
use App\classes\Tariff;

try {
    $tariff = new Tariff(
        "Хочу SkyNet",
        325,
        "2023-04-28",
        100,
        TariffType::Actual
    );
    
    $tariff->echoTariffInfo();
    
    $tariff->setName("Т-200");
    $tariff->setPrice(520);
    $tariff->setValidityPeriod("2023-05-02");
    $tariff->setSpeed(200);
    $tariff->setTariffType(TariffType::Archval);
} catch (\Error $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
} catch (\Exception $e) {
    echo "Exception: " . $e->getMessage() . PHP_EOL;
}
