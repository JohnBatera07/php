<?php
    require_once "Carro.php";
    require_once "Gol.php";
    require_once "Uno.php";

    $carro = new Carro();
    $gol = new Gol();
    $uno = new Uno();

    echo $carro->ano . "<br>" . $carro->arcondicionado . "<br>" . $carro->cor . "<br>" . $carro->aro . "<br>" . $carro->nitro . "<br>";
    echo $gol->marca . "<br>" . $gol->ano . "<br>" . $gol->arcondicionado . "<br>" . $gol->cor . "<br>" . $gol->aro . "<br>" . $gol->nitro . "<br>";
    echo $uno->marca . "<br>" . $uno->ano . "<br>" . $uno->arcondicionado . "<br>" . $uno->cor . "<br>" . $uno->aro . "<br>" . $uno->nitro;
?>