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
    <?php require "includes/menu.php";
    session_start();

    if (isset($_SESSION['logar'])) {
      //echo "Bem Vindo";
    } else {
      header("Location: ../index.php");
      session_destroy();
    }
    ?>
    <h1>Cadastro Produto</h1>

    <form method="post" action="acao/acaoAvaliacao.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="inputAddress">Razão Social</label>
        <input type="text" name="razao" class="form-control" id="inputAddress" placeholder="">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">CNPJ</label>
          <input type="text" name="cnpj" class="form-control" id="inputEmail4" placeholder="">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Inscrição Estadual</label>
          <input type="text" name="inscricao" class="form-control" id="inputEmail4" placeholder="">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Logradouro</label>
          <input type="text" name="logradouro" class="form-control" id="inputEmail4" placeholder="">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Bairro</label>
          <input type="text" name="bairro" class="form-control" id="inputEmail4" placeholder="">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Município</label>
          <input type="text" name="municipio" class="form-control" id="inputEmail4" placeholder="">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">UF</label>
          <input type="text" name="uf" class="form-control" id="inputEmail4" placeholder="">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">CEP</label>
          <input type="text" name="cep" class="form-control" id="inputEmail4" placeholder="">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Telefone</label>
          <input type="text" name="telefone" class="form-control" id="inputEmail4" placeholder="">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">E-mail</label>
        <input type="text" name="email" class="form-control" id="inputAddress" placeholder="">
      </div>

      <h3>Representante(s) da Empresa para contato:</h3>
      <h5>Representante:</h5>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Nome</label>
          <input type="text" name="nome1" class="form-control" id="inputEmail4" placeholder="">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Função</label>
          <input type="text" name="funcao1" class="form-control" id="inputEmail4" placeholder="">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Telefone</label>
          <input type="text" name="telefone1" class="form-control" id="inputEmail4" placeholder="">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">E-mail</label>
          <input type="text" name="email1" class="form-control" id="inputEmail4" placeholder="">
        </div>
      </div>

      <h5>Representante:</h5>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Nome</label>
          <input type="text" name="nome2" class="form-control" id="inputEmail4" placeholder="">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Função</label>
          <input type="text" name="funcao2" class="form-control" id="inputEmail4" placeholder="">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Telefone</label>
          <input type="text" name="telefone2" class="form-control" id="inputEmail4" placeholder="">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">E-mail</label>
          <input type="text" name="email2" class="form-control" id="inputEmail4" placeholder="">
        </div>
      </div>

      <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
    </form>

    <?php require "includes/rodape.php"; ?>
  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>