<!DOCTYPE html>
<html>
  <head>
    <title>Variáveis</title>
  </head>
  <body>
    <?php
      $s = "Meu texto";
      printf("<p>S: %s</p>", $s);

      #Concatenação de strings
      $s = $s . " - Concatenado " . "1 2 3";
      printf("<p>S: %s</p>", $s);
      $i = 1000.99;
      $s = $s . " - Concatenado " . "$i";
      printf("<p>S: %s</p>", $s);

      //Funções
      #strlen - Tamanho da String
      $s = "Hello World";
      $i = strlen($s);
      printf("<p>Tamanho de s = %d</p>", $i);

      //Mudançãs da String
      #strtoupper - tudo caixa alta
      $s = "Hello World";
      $u = strtoupper($s);
      printf("<p>strtoupper(s) = %s </p>", $u);

      #strtolower - tudo caixa baixa
      $s = "Hello World";
      $l = strtolower($s);
      printf("<p>strtolower(s) = %s </p>", $l);

      #strpos - encontrando posição de string contida dentro de uma string
      $s = "Hello World";
      $t = "wor";
      $p = strpos($s, $t);
      if($p === false) {
        printf("<p>String não encontrada</p>");
      } else {
        printf("<p>strpos = %d</p>", $p);
      }

      # stripos - ignora o case ou a caixa
      $s = "Hello World";
      $t = "wor";
      $p = stripos($s, $t);
      if($p === false) {
        printf("<p>String não encontrada</p>");
      } else {
        printf("<p>strpos = %d</p>", $p);
      }

      #trim - retira espaços tando da esquerda quanto da direita
      $s = "        Hello World         ";
      printf("<p>%s</p>", $s);
      $t = trim($s);
      printf("<p>%s</p>", $t);
      #trim - retirando caracteres tando da esquerda quanto da direita
      $s = "________Hello World_______";
      printf("<p>%s</p>", $s);
      $t = trim($s, '_');
      printf("<p>%s</p>", $t);

      #strcmp(str1, str2) - para comparação de strings
      $s1 = "minha string";
      $s2 = "string";
      $r = strcmp($s1, $s2);
      printf("<p>Resultado do strcmp(s1, s2) = %d</p>", $r);
      $r = strcmp($s2, $s1);
      printf("<p>Resultado do strcmp(s2, s1) = %d</p>", $r);
      $r = strcmp($s2, $s2);
      printf("<p>Resultado do strcmp(s2, s2) = %d</p>", $r);
      /*
      se resultado < 0, str1 vem antes que str2
      se resultado > 0, str1 vem antes que str2
      se resultado = 0, str1 é igual a str2
      */

      #explode - transformar para dentro de um array
      $computador = "mouse teclado monitor memoria cpu impressora";
      #passamos o separador e a string
      $pecas = explode(" ", $computador);
      print_r($pecas);

    ?>
  </body>
</html>
