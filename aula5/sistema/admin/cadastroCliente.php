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
      echo "Bem Vindo";
    } else {
      header("Location: ../index.php");
      session_destroy();
    }

    ?>
    <h1>Cadastro Cliente</h1>

    <form method="post" action="acao/acaoCliente.php">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Meu Nome">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">CPF</label>
            <input type="text" name="cpf" class="form-control" placeholder="000.000.000-00">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Data de Nascimento</label>
            <input type="date" name="data" class="form-control" placeholder="Data de Nascimento">
          </div>
        </div>
        <div class="col-md-4">
          <label for="exampleInputEmail1">Sexo</label> <br>
          <div class="form-check form-check-inline" style="margin-top: 5px;">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="Maculino" checked>
            <label class="form-check-label" for="exampleRadios1">
              Masculino
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="Feminino">
            <label class="form-check-label" for="exampleRadios2">
              Feminino
            </label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label for="exampleInputEmail1">Estado Civil</label>
          <select name="civil" class="form-control">
            <option value="solteiro">Solteiro</option>
            <option value="casado">Casado</option>
          </select>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Renda Mensal</label>
            <input type="text" name="renda" class="form-control" placeholder="0,00">
          </div>
        </div>
      </div>

      <div>
        <h3>Endereço <h3>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Logradouro</label>
            <input type="text" name="logradouro" class="form-control" placeholder="Av. Paulista">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Número</label>
            <input type="text" name="numero" class="form-control" placeholder="N°">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Complemento</label>
            <input type="text" name="complemento" class="form-control" placeholder="Casa, Apto, Loja">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label for="exampleInputEmail1">Estado</label>
          <select name="estado" class="form-control">
            <option value="acre">Acre</option>
            <option value="piaui">Piauí</option>
            <option value="bahia">Bahia</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="exampleInputEmail1">Cidade</label>
          <input type="text" name="cidade" class="form-control" placeholder="São Paulo">
        </div>
      </div> <br>
      <div class="row">
        <div class="col-md-1">
          <input type="submit" value="Enviar" name="enviar" class="btn btn-primary">
        </div>
      </div>
    </form>


    <?php require "includes/rodape.php"; ?>
  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>