<?php
require_once __DIR__ . "/../BusinessLogic/Fahrenheit.php";
function viewFahrenheit()
{
    echo "Konversi Fahrenheit" . PHP_EOL;

    $fahrenheit = input("Masukan suhu dalam fahrenheit (x untuk batal)");

    if ($fahrenheit == "x") {
        echo "Batal melakukan conversi!" . PHP_EOL;
    } else {
        convertFahrenheit($fahrenheit);
    }
}
