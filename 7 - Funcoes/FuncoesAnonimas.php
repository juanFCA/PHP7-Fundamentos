<?php

  $minhafuncao = function ($nome)
  {
    echo "<h1>Nome: $nome</h1>";
  };

  $minhafuncao("Bruno Oliveira");
  $minhafuncao("Joao Vinhedo");

  function executarFuncao($parametro, $funcao)
  {
    $funcao($parametro);
  }

  executarFuncao("Jose Carmino", function ($nome){
    echo "<h1>Funcao Anonima: $nome</h1>";
  });

  function teste($parametro1, $parametro2="padrao")
  {
    echo "<h4>Teste: $parametro1 e $parametro2</h4>";
  }

  teste("Meu parametro");
?>
