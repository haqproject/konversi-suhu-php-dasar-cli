<?php
require_once __DIR__ . "/../BusinessLogic/Kelvin.php";
function viewKelvin()
{
    echo "Konversi kelvin" . PHP_EOL;

    $kelvin = input("Masukan suhu dalam kelvin (x untuk batal)");

    if ($kelvin == "x") {
        echo "Batal melakukan conversi!" . PHP_EOL;
    } else {
        convertkelvin($kelvin);
    }
}
