<?php
  include 'MinhaBiblioteca.php';

  adicionarPessoas1("Pedro", "25", "Juazeiro");
  adicionarPessoas1("Vitor", "29", "Juiz de Fora");
  adicionarPessoas2($pessoas, "Santos", "21", "Belo Horizonte");
  adicionarPessoas2($pessoas, "Carlos", "18", "Sao Paulo");
  imprimePessoas($pessoas);
  $c = getQuantidadePessoas($pessoas);
  echo "<h1>Quantidade de Pessoas: $c </h1>";
  echo "<h1>Removendo Pessoa....</h1>";
  removePessoa($pessoas, "Carlos");
  $c = getQuantidadePessoas($pessoas);
  echo "<h1>Quantidade de Pessoas: $c </h1>";
  imprimePessoas($pessoas);
?>
