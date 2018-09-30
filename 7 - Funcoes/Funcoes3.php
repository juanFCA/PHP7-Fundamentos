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

  function imprimePessoas($pessoas)
  {
    var_dump($pessoas);
  }

  function getQuantidadePessoas($pessoas)
  {
    return count($pessoas);
  }

  function removePessoa(&$pessoas, $nome) {
    $i = array_search($nome, array_column($pessoas, "nome"));
    if(is_integer($i)) {
      array_splice($pessoas, $i, 1);
    }
  }

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
