<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body>
    <div class="container">
      <?php require "includes/menu.php"; ?>
      <h1>Cadastro Usuário</h1>

      <form method="post" action="acao/acaoUsuario.php">

      <div class="row">
        <div class="col-md-12">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" name="nome" class="form-control" placeholder="Cadastro Usuário">
  </div>
  
</div>  
</div>

<div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInputEmail1">CPF</label>
                <input type="text" name="cpf" class="form-control" placeholder="Informe o CPF">
              </div>
            </div>
            <div class="col-md-7">
            <div class="form-group">
                <label for="exampleInputEmail1">Endereço</label>
                <input type="text" name="endereco" class="form-control" placeholder="Informe o Endereço">
              </div>
            </div>
            <div class="col-md-2">
            <label for="exampleInputEmail1">Nível</label>
              <select name="nivel" class="form-control">
              <option value="-">-</option>
                <option value="Admin">Admin</option>
                <option value="Padrão">Padrão</option>
              </select>
            </div>
</div>

<div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Informe o Email">
              </div>
            </div>
            <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Senha</label>
                <input type="text" name="senha" class="form-control" placeholder="Informe a Senha">
              </div>
            </div>
            <div class="col-md-2">
            <label for="exampleInputEmail1">Status</label>
              <select name="status" class="form-control">
                <option value="ativo">Ativo</option>
                <option value="desativado">Desativado</option>
              </select>
            </div>
            </div>


            <div style= "text-align: right;">
              <input type="submit" value="Enviar" name="enviar" class="btn btn-success">
              <input type="submit" value="Cancelar" name="cancelar" class="btn btn-light">
            </div>

</form>

<?php require "includes/rodape.php"; ?>
     



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>