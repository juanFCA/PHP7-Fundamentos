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
?>
