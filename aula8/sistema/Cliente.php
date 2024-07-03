<?php
    class Cliente extends Sistema{
        public $cpf;

        //Método para imprimir Atributos
        public function atributosCliente(){
            $this->nome = $_POST['nome'];
            $this->cpf = $_POST['cpf'];
            $this->mensagem = $_POST['mensagem'];
            $this->telefone = $_POST['telefone'];

            //echo $this->getNome() . "<br>" . $this->getCpf() . "<br>" . $this->getMensagem();
            echo $this->nome . "<br>" . $this->cpf . "<br>" . $this->mensagem;
        }
    }
?>