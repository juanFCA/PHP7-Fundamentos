<!DOCTYPE html>
<html>
  <head>
    <title> Funções Diversas </title>
  </head>
  <body>
    <?php

      $i = 1;
      $b = is_integer($i);
      echo "b = $b <br>";
      echo "Testando inteiro: ";
      var_dump(is_integer($i));
      echo "<br>";

      $s = "Um texto";
      echo "Testanto string: ";
      var_dump(is_string($s));
      echo "<br>";

      $f = 1.65;
      echo "Testando ponto flutuante: ";
      var_dump(is_float($f));
      echo "<br>";

      $b = true;
      echo "Testando booleano: ";
      var_dump(is_bool($b));
      echo "<br>";

      $a = [];
      echo "Testando array: ";
      var_dump(is_array($a));
      echo "<br>";

      //Como verificar se a variável existe, ou foi setada, oi se possui
      echo "Testando isset: ";
      var_dump(isset($qualquer));
      echo "<br>";
      echo "O b foi setado: ";
      var_dump(isset($b));


    ?>
  </body>
</html>
