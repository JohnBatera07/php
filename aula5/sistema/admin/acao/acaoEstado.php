<?php
    if( isset( $_POST['enviar'])){
        
        $nome = $_POST['nome'];

        if( empty( trim($nome))){
            echo "<script> alert('Campo em Branco');window.location.href='../cadastroEstado.php';</script>";
        }
        else{
            echo "<script> alert('Cadastrado com Sucesso');window.location.href='../cadastroEstado.php';</script>";
            //header("Location: ../cadastroEstado.php");
        }
    }
    else{
        echo "Não foi possível cadastrar";
    }
?>