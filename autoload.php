<?php
spl_autoload_register(function ($class) {
    $ruta = "src\\" . $class . ".php";
    $ruta = str_replace("\\", "/", $ruta);
    include_once $ruta;
});