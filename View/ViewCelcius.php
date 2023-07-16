<?php
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/Celcius.php";


function viewCelcius()
{
    echo "Konversi Celcius" . PHP_EOL;

    $celcius = input("Masukan suhu dalam celcius (x untuk batal)");

    if ($celcius == "x") {
        echo "Batal melakukan conversi!" . PHP_EOL;
    } else {
        convertCelcius($celcius);
    }
}
