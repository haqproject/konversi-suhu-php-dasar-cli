<?php
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../View/ViewCelcius.php";
require_once __DIR__ . "/../View/ViewFahrenheit.php";
require_once __DIR__ . "/../View/ViewKelvin.php";
require_once __DIR__ . "/../View/ViewReamur.php";

function viewMenu()
{
    while (true) {
        echo "Aplikasi Konversi Suhu" . PHP_EOL;
        echo "1. Konversi Celcius" . PHP_EOL;
        echo "2. Konversi Fahrenheit" . PHP_EOL;
        echo "3. Konversi Kelvin" . PHP_EOL;
        echo "4. Konversi Reamur" . PHP_EOL;
        echo "x untuk batal" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewCelcius();
        } elseif ($pilihan == "2") {
            viewFahrenheit();
        } elseif ($pilihan == "3") {
            viewKelvin();
        } elseif ($pilihan == "4") {
            viewReamur();
        } elseif ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Stopped Programm" . PHP_EOL;
}
