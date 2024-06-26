<?php
    if( isset( $_POST['enviar'])){
        
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];  
        $data = $_POST['data'];  
        $exampleRadios = $_POST['exampleRadios'];
        $civil = $_POST['civil'];
        $renda = $_POST['renda'];
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        
       

        if( empty( trim($nome))){
            echo "<script> alert('Campo em Branco');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($cpf))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($data))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($exampleRadios))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($civil))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($renda))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($logradouro))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($numero))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($complemento))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($estado))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($cidade))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else{
            echo $nome . "<br>" . $cpf . "<br>" . $data . "<br>" . $exampleRadios . "<br>" . $civil . "<br>" . $renda . "<br>" . $logradouro . "<br>" . $numero . "<br>" . $complemento . "<br>" . $estado . "<br>" . $cidade;
        }
    }
    else{
        echo  "Não clicou no botão";
    }
?>