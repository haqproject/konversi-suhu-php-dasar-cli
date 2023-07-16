<?php

function convertKelvin($suhu)
{
    $celcius = $suhu - 273;
    $fahrenheit = 9 / 5 * ($suhu - 273) + 32;
    $reamur = 4 / 5 * ($suhu - 273);

    echo "Konversi From Kelvin" . PHP_EOL;
    echo "$suhu K = $celcius C" . PHP_EOL;
    echo "$suhu K = $fahrenheit F" . PHP_EOL;
    echo "$suhu K = $reamur R" . PHP_EOL;
}
