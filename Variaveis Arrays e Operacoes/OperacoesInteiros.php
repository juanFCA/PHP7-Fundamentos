<html>
  <head>
    <title>Operações: Números Inteiros</title>
  </head>
  <body>
    <?php
      #Operações Básicas
      $i = 100;
      $soma = $i + 100;
      $subtracao = $i - 50;
      $multiplicacao = $i * 5;
      $divisao = $i / 5;
      $resto = $i % 3;
      printf("<p>I = %d, Soma = %d, Subtração = %d, Multiplicação = %d, Divisão = %d, Resto = %d </p>",
            $i, $soma, $subtracao, $multiplicacao, $divisao, $resto);

      #Incrementação
      $i = 1;
      $i = $i + 1;
      $i++;
      ++$i;
      printf("<p>Meu i = %d</p>", $i);

      $i = 1;
      printf("i = %d <br>", $i);
      #Lê para depois incrementrar
      printf("i = %d <br>", $i++);
      echo "i = $i<br>";
      #Incrementra para depois lê
      printf("i = %d <br>", ++$i);

      $i = $i + 2;
      $i = $i - 2;
      $i = $i * 2;
      $i = $i / 2;
      #Também é igual
      $i += 2;
      $i -= 2;
      $i *= 2;
      $i /= 2;

    ?>
  </body>
</html>
