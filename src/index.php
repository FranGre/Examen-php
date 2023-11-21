<?php


require $_SERVER["DOCUMENT_ROOT"] . "/mysql/examen-php/src/Sales.php";
require $_SERVER["DOCUMENT_ROOT"] . "/mysql/examen-php/src/models/Book.php";
require $_SERVER["DOCUMENT_ROOT"] . "/mysql/examen-php/src/includes/functions.php";
require $_SERVER["DOCUMENT_ROOT"] . "/mysql/examen-php/src/includes/header.php";


echo $_SESSION['welcomeMsg'];


$cicles = generateMatriz(10, 10);
showMatriz($cicles);
/*
for ($i = 0; $i < 10; $i++) { ?>
    <h1>Fila
        <?= $i ?>
    </h1>
    <?php
    echo sumeRow($matriz, $i);
}

for ($i = 0; $i < 10; $i++) { ?>
    <h1>Columna
        <?= $i ?>
    </h1>
    <?php
    echo sumeColumn($matriz, $i);
}
*/

$sales = new Sales();

var_dump($sales->getUserById(4));
//$sales->save(2, 2);

$sales->delete(2, 2);
