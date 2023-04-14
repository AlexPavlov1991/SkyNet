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
    
    echo PHP_EOL
        . "Название: " . $tariff->getName() . PHP_EOL
        . "Стоимость: " . $tariff->getPrice() . " руб/мес" . PHP_EOL
        . "Срок действия: до " . $tariff->getValidityPeriod() . PHP_EOL
        . "Скорость: " . $tariff->getSpeed() . " Мбит/сек" . PHP_EOL
        . "Тип тарифа: " . $tariff->getTariffType() . PHP_EOL
    ;
} catch (\Error $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
} catch (\Exception $e) {
    echo "Exception: " . $e->getMessage() . PHP_EOL;
}
