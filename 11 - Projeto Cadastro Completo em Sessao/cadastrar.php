<?php
  session_start();
  require_once('estados.php');
  $id = '';
  $nome = '';
  $idade = '';
  $telefone = '';
  $endereco = '';
  $cidade = '';
  $estado = '';

  if (count($_GET)) {
    $id = $_GET['id'];
    $nome = $_SESSION['cadastropessoal'][$id]['nome'];
    $idade = $_SESSION['cadastropessoal'][$id]['idade'];
    $telefone = $_SESSION['cadastropessoal'][$id]['telefone'];
    $endereco = $_SESSION['cadastropessoal'][$id]['endereco'];
    $cidade = $_SESSION['cadastropessoal'][$id]['cidade'];
    $estado = $_SESSION['cadastropessoal'][$id]['estado'];
  }
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 5rem;
      }
      .starter-template {
        padding: 3rem 1.5rem;
        text-align: center;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

      <a class="navbar-brand" href="#">Cadastro de Pessoas</a>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="listar.php">Listar</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="cadastrar.php">Cadastrar</a>
          </li>
        </ul>
      </div>

    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <form style="text-align: left;" method="post" action="salvar.php">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome"
                   id="nome" placeholder="Nome da Pessoa" value="<?php echo $nome; ?>">
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="idade">Idade</label>
              <input type="number" class="form-control" name="idade"
                     id="idade" placeholder="Idade da Pessoa" value="<?php echo $idade; ?>">
            </div>
            <div class="form-group col-md-8">
              <label for="telefone">Telefone</label>
              <input type="text" class="form-control" name="telefone"
                     id="telefone" placeholder="Telefone da Pessoa" value="<?php echo $telefone; ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" name="endereco"
                   id="endereco" placeholder="Endereço da Pessoa" value="<?php echo $endereco; ?>">
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control" name="cidade"
                     id="cidade" placeholder="Cidade da Pessoa" value="<?php echo $cidade; ?>">
            </div>
            <div class="form-group col-md-4">
              <label for="estado">Estado</label>
              <select class="form-control" id="estado" name="estado">
                <?php
                  $uf_sel = $estados[0];
                  if ($estado != '') {
                    $uf_sel = $estado;
                  }
                  foreach ($estados as $i => $uf) {
                    if ($i == $uf_sel) {
                      echo "<option value=\"$i\" selected >$uf</option>";
                    } else {
                      echo "<option value=\"$i\">$uf</option>";
                    }
                  }
                ?>
              </select>
            </div>
          </div>
          <br><br>
          <button type="submit" class="btn btn-primary">Salvar</button>
          <button type="reset" class="btn btn-warning">Limpar</button>
        </form>
      </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../node_modules/jquery/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
