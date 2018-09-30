<?php

  function imprimirMeuTexto($titulo, $texto)
  {
    echo "<h1> $titulo </h1>";
    echo "<p> $texto </p>";
  }

  imprimirMeuTexto("Meu Titulo", "Cozinheiro Chefe");
  imprimirMeuTexto("Meu Nome", "Joaquim Barbosa");
  imprimirMeuTexto("Minha idade", "46");
  imprimirMeuTexto("Meu endereco", "Rua das Ameixas n15");
?>
