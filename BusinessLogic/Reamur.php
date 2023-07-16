<?php

function convertReamur($suhu)
{
    $celcius = 5 / 4 * $suhu;
    $fahrenheit = 9 / 4 * $suhu + 32;
    $kelvin = 5 / 4 * $suhu + 273;

    echo "Konversi From Reamur" . PHP_EOL;
    echo "$suhu R = $celcius C" . PHP_EOL;
    echo "$suhu R = $fahrenheit F" . PHP_EOL;
    echo "$suhu R = $kelvin R" . PHP_EOL;
}
