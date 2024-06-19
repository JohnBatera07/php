<?php
    //Função de Data

    echo date("d/m/y") . "<br>";
    echo date("d/m/Y") . "<br>";
    echo date("H:i:s") . "<br>";


    //Funções para Servidor Globais

    echo $_SERVER['PHP_SELFIE']; // Arquivo
    echo $_SERVER['SERVER_NAME']; // Localhost
    echo $_SERVER['REMOTE_ADDR']; // Status
    echo $_SERVER['REMOTE_POST']; // Domínio
?>