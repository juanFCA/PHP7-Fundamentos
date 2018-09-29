<!DOCTYPE html>
<html>
  <head>
    <title>Operações: Lógicas</title>
  </head>
  <body>
    <?php
      $a = true;
      $b = false;
      echo "<br> a = "; var_dump($a);
      echo "<br> b = "; var_dump($b);

      #Operação E -> AND
      $r = $a && $b;
      echo "<br> a E b = "; var_dump($r);
      $r = $a && $a;
      echo "<br> a E a = "; var_dump($r);
      $r = $b && $b;
      echo "<br> b E b = "; var_dump($r);

      #Operação OU -> OR
      $r = $a || $b;
      echo "<br> a OU b = "; var_dump($r);
      $r = $a || $a;
      echo "<br> a OU a = "; var_dump($r);
      $r = $b || $b;
      echo "<br> b OU b = "; var_dump($r);

      #Operação Negado/Diferente
      $r = !$a;
      echo "<br> !a = "; var_dump($r);
      $r = !$b;
      echo "<br> !b = "; var_dump($r);
      $r = !($a || $b);
      echo "<br> !($a OU $b) = "; var_dump($r);
      echo "<hr>";

      #Comparadores
      $n1 = 10;
      $n2 = 20;
      $r = $n1 > 5;
      echo "<br> $n1 > 5 = "; var_dump($r);
      $r = $n1 > $n2;
      echo "<br> $n1 > $n2 = "; var_dump($r);
      $r = $n1 < 5;
      echo "<br> $n1 < 5 = "; var_dump($r);
      $r = $n1 <= 10;
      echo "<br> $n1 <= 10 = "; var_dump($r);
      $r = $n1 >= 10;
      echo "<br> $n1 >= 10 = "; var_dump($r);
      $r = $n1 == 10;
      echo "<br> $n1 == 10 = "; var_dump($r);
      $r = $n1 != $n2;
      echo "<br> $n1 != $n2 = "; var_dump($r);
      $r = $n1 != 10;
      echo "<br> $n1 != 10 = "; var_dump($r);
      echo "<hr>";

      $s = "10";
      $n = 10;
      $r = is_integer($n) && is_string($s);
      echo "<br> is_integer(n) E is_string(s) = "; var_dump($r);
      $r = $s == $n;
      #deveria ser false porém no php compara o valor interno com dois ==
      echo "<br> $s == $n = "; var_dump($r);
      $r = $s === $n;
      #para compara o tipo da variável acrescenta um = aos dois
      echo "<br> $s === $n = "; var_dump($r);
    ?>
  </body>
</html>
