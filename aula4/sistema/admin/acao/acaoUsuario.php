<?php
    if( isset( $_POST['enviar'])){
        
        $nome = $_POST['nome'];  
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $nivel = $_POST['nivel'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $status = $_POST['status'];
        
       

        if( empty( trim($nome))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($cpf))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($endereco))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($nivel))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($email))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($senha))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($status))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else{
            echo $nome . "<br>" . $cpf . "<br>" . $endereco . "<br>" . $nivel . "<br>" . $email . "<br>" . $senha . "<br>" . $status;
        }
    }
        else{
            echo  "Não clicou no botão";
    }

?>