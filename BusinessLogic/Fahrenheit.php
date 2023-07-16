<?php

function convertFahrenheit($suhu)
{
    $celcius = 5 / 9 * ($suhu - 32);
    $kelvin = 5 / 9 * ($suhu - 32) + 273;
    $reamur = 4 / 9 * ($suhu - 32);

    echo "Konversi From Fahrenheit" . PHP_EOL;
    echo "$suhu F = $celcius C" . PHP_EOL;
    echo "$suhu F = $kelvin K" . PHP_EOL;
    echo "$suhu F = $reamur R" . PHP_EOL;
}
