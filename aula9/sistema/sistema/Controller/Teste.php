<?php
    require_once "../../vendor/autoload.php";
    __DIR__ . "../../vendor/autoload.php";
    
    class Teste{
        public $nome = "Teste Autoload";
    
        //Método que imprime Nome
        public function imrprimeNome(){
            echo $this->nome;
        }
    }