<?php
    if( isset( $_POST['enviar'])){
        
        $razao = $_POST['razao'];
        $cnpj = $_POST['cnpj'];  
        $inscricao = $_POST['inscricao'];  
        $logradouro = $_POST['logradouro'];
        $bairro = $_POST['bairro'];
        $municipio = $_POST['municipio'];
        $uf = $_POST['uf'];
        $cep = $_POST['cep'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $nome1 = $_POST['nome1'];
        $funcao1 = $_POST['funcao1'];
        $telefone1 = $_POST['telefone1'];
        $email1 = $_POST['email1'];
        $nome2 = $_POST['nome2'];
        $funcao2 = $_POST['funcao2'];
        $telefone2 = $_POST['telefone2'];
        $email2 = $_POST['email2'];
        
       

        if( empty( trim($razao))){
            echo "<script> alert('Campo em Branco');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($cnpj))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($inscricao))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($logradouro))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($bairro))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($municipio))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($uf))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($cep))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($telefone))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($email))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($nome1))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($funcao1))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($telefone1))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($email1))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($nome2))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($funcao2))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($telefone2))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else if( empty( trim($email2))){
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroCliente.php';</script>";
        }
        else{
            echo $razao . "<br>" . $cnpj . "<br>" . $inscricao . "<br>" . $logradouro . "<br>" . $bairro . "<br>" . 
            $municipio . "<br>" . $uf . "<br>" . $cep . "<br>" . $telefone . "<br>" . $email . "<br>" . $nome1 . "<br>" . $funcao1 . "<br>" . 
            $telefone1 . "<br>" . $email1 . "<br>" . $nome2 . "<br>" . $funcao2 . "<br>" . $telefone2 . "<br>" . $email2;
        }
    }
    else{
        echo  "Não clicou no botão";
    }
?>