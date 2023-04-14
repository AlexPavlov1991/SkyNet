<?php

namespace App\classes;

class Tariff
{
    public function __construct(
        private string $name,
        private int $price,
        private string $validityPeriod,
        private int $speed,
        private TariffType $tariffType
    ){}

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getValidityPeriod(): string
    {
        return $this->validityPeriod;
    }

    public function getSpeed(): int
    {
        return $this->price;
    }

    public function getTariffType(): string
    {
        return $this->tariffType->value;
    }
    
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function setValidityPeriod(string $validityPeriod): void
    {
        $this->validityPeriod = $validityPeriod;
    }

    public function setSpeed(int $speed): void
    {
        $this->price = $speed;
    }

    public function setTariffType(TariffType $tariffType): void
    {
        $this->tariffType = $tariffType;
    }

    /**
     * Для отладки
     */
    public function echoTariffInfo()
    {
        echo "Название: " . $this->name . PHP_EOL
            . "Стоимость: " . $this->price . " руб/мес" . PHP_EOL
            . "Срок действия: до " . $this->validityPeriod . PHP_EOL
            . "Скорость: " . $this->speed . " Мбит/сек" . PHP_EOL
            . "Тип тарифа: " . $this->tariffType->value . PHP_EOL
        ;
    }
}