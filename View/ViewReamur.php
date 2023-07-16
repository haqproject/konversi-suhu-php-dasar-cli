<?php
require_once __DIR__ . "/../BusinessLogic/Reamur.php";
function viewReamur()
{
    echo "Konversi reamur" . PHP_EOL;

    $reamur = input("Masukan suhu dalam reamur (x untuk batal)");

    if ($reamur == "x") {
        echo "Batal melakukan conversi!" . PHP_EOL;
    } else {
        convertreamur($reamur);
    }
}
