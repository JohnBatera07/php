<?php
    if( isset( $_POST['proximo'])){
        
        $codigo = $_POST['codigo'];
        $nome = $_POST['nome'];  
        $email = $_POST['email'];  
        $cpf = $_POST['cpf'];
        $numero = $_POST['numero'];
        $telefone = $_POST['telefone'];
        $cep = $_POST['cep'];
        $logradouro = $_POST['logradouro'];
        $n = $_POST['n'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $status = $_POST['status'];
        
       

        if( empty( trim($codigo))){
            echo "<script> alert('Campo em Branco');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($nome))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($email))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($cpf))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($numero))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($telefone))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($cep))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($logradouro))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($n))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($bairro))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($cidade))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($uf))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($status))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else{
            echo $codigo . "<br>" . $nome . "<br>" . $email . "<br>" . $cpf . "<br>" . $numero . "<br>" . $telefone . "<br>" . $cep . "<br>" 
            . $logradouro . "<br>" . $n . "<br>" . $bairro . "<br>" . $cidade . "<br>" . $uf . "<br>" . $status;
        }
    }
        else{
            echo  "Não clicou no botão";
    }

?>