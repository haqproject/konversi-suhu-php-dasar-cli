<?php

function convertCelcius($suhu)
{
    $fahrenheit = (9 / 5 * $suhu) + 32;
    $kelvin = $suhu + 273;
    $reamur = 4 / 5 * $suhu;

    echo "Konversi From Celcius" . PHP_EOL;
    echo "$suhu C = $fahrenheit F" . PHP_EOL;
    echo "$suhu C = $kelvin K" . PHP_EOL;
    echo "$suhu C = $reamur R" . PHP_EOL;
}
