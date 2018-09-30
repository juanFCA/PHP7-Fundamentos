<?php
  session_start();
  require_once('estados.php');
  $pessoas = [];
  if (isset($_SESSION['cadastropessoal'])) {
    $pessoas = $_SESSION['cadastropessoal'];
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
    <!-- Fonte-Awesome CSS -->
    <link href="../node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">

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
          <li class="nav-item active">
            <a class="nav-link active" href="listar.php">Listar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastrar.php">Cadastrar</a>
          </li>
        </ul>
      </div>

    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Idade</th>
              <th scope="col">Telefone</th>
              <th scope="col">Endereço</th>
              <th scope="col">Cidade</th>
              <th scope="col">Estado</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($pessoas as $i => $p) {
                $uf = $estados[$p['estado']];
                echo "<tr>";
                echo "<th scope=\"row\">" . $i . "</th>";
                echo "<td>" . $p['nome'] . "</th>";
                echo "<td>" . $p['idade'] . "</th>";
                echo "<td>" . $p['telefone'] . "</th>";
                echo "<td>" . $p['endereco'] . "</th>";
                echo "<td>" . $p['cidade'] . "</th>";
                echo "<td>" . $uf . "</th>";
                echo "<td>";
                echo ' <a class="btn btn-danger" href="apagar.php?id=' . $i . '"><i class="fa fa-trash-o fa-lg"></i></a> ';
                echo ' <a class="btn btn-warning" href="cadastrar.php?id=' . $i . '"><i class="fa fa-pencil fa-lg"></i></a> ';
                echo "</th>";
                echo "</tr>";
              }
            ?>
          </tbody>
        </table>
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
