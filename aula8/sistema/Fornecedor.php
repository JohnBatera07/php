<?php
    class Fornecedor extends Sistema{
        public $rua;
        public $bairro;
        public $numero;
        public $cnpj;

        //Método para imprimir Atributos
        public function atributosFornecedor(){
            $this->nome = $_POST['nome'];
            $this->telefone = $_POST['telefone'];
            $this->mensagem = $_POST['mensagem'];
            $this->rua = $_POST['rua'];
            $this->bairro = $_POST['bairro'];
            $this->numero = $_POST['numero'];
            $this->cnpj = $_POST['cnpj'];

            //echo $this->getNome() . "<br>" . $this->getCpf() . "<br>" . $this->getMensagem();
            echo $this->nome . "<br>" . $this->rua . "<br>" . $this->bairro . "<br>" . $this->numero . "<br>" . $this->cnpj . "<br>" . $this->telefone . "<br>" . $this->mensagem;
        }
    }
?>