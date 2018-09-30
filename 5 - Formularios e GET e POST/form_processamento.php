<?php
  // Dois arrays especiais $_GET e o $_POST
  $dados = [];

  if(count($_POST)) {
    $dados = $_POST;
  }
  elseif (count($_GET)) {
    $dados = $_GET;
  }

  if (count($dados)) {
    echo "<p>Nome: " . $dados['nome'] . "</p>";
    echo "<p>Idade: " . $dados['idade'] . "</p>";
    echo "<p>Cidade: " . $dados['cidade'] . "</p>";
    echo "<p>Endereco: " . $dados['endereco'] . "</p>";
  }
  else {
    echo "Nao a dados para imprimir";
  }
?>
