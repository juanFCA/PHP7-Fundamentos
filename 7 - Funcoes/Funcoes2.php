<?php
  $pessoas = [];

  function adicionarPessoas1($nome, $idade, $cidade)
  {
    global $pessoas;
    $pessoas[] = ["nome" => $nome, "idade" => $idade, "cidade" => $cidade];
  }

  function adicionarPessoas2(&$pessoas, $nome, $idade, $cidade)
  {
    $pessoas[] = ["nome" => $nome, "idade" => $idade, "cidade" => $cidade];
  }

  adicionarPessoas1("Pedro", "25", "Juazeiro");
  adicionarPessoas1("Vitor", "29", "Juiz de Fora");

  adicionarPessoas2($pessoas, "Santos", "21", "Belo Horizonte");
  adicionarPessoas2($pessoas, "Carlos", "18", "Sao Paulo");

  function teste(&$nome)
  {
    $nome = "Bruno";
  }
  $meunome = "Joao";
  teste($meunome);

  echo "<h1>$meunome</h1>";

  var_dump($pessoas);

?>
