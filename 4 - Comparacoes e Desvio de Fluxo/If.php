<html>
  <head>
    <title>IF</title>
  </head>
  <body>
    <?php
      $a = false;
      if($a)
        echo "<p>a = true</p>\n";

      if ($a) {
        echo "<p>a = true</p>\n";
      } else {
        echo "<p>a = false</p>\n";
      }

      $a = 3;
      if ($a == 1)
          echo "<p> a = um </p>\n";
      elseif ($a == 2)
          echo "<p> a = dois </p>\n";
      elseif ($a == 3)
          echo "<p> a = tres </p>\n";
      else
          echo "<p> a = nao sei </p>\n";

      print "<hr>";

      $a = '3';
      $b = 1;

      if (is_integer($a))
          echo "<p>a =  int</p>\n";
      else
          echo "<p>a nao é int</p>\n";

      if (is_integer($b))
          echo "<p>b =  int</p>\n";
      else
          echo "<p>b nao é int</p>\n";

      if (is_string($a) && strcmp($a,'3') == 0)
          echo "<p>Comparacao OK</p>\n";

      $a = 3;
      $b = 1;
      if ($a > $b)
          echo "<p>$a maior que $b</p>\n";
      elseif ($a < $b)
          echo "<p>$a menor que $b</p>\n";
      else
          echo "<p>$a igual a $b</p>\n";

      if ($a > $b && ($a == 1 || $a == 3) && ($a != 0))
          echo "<p>Condicoes atendidas</p>\n";


      // Operador Ternário
      $b = ($a == 3) ? 30 : 40;
      /*
          Mesma coisa que:
          if ($a==3)
              $b = 30;
          else
              $b = 40;
      */

    ?>
  </body>
</html>
