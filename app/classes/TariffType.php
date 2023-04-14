<?php

namespace App\classes;

enum TariffType: string
{
    case Actual = "актуальный";
    case Archval = "архивный";
    case System = "системный";
}