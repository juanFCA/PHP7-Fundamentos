<!DOCTYPE html>
<html>
  <head>
    <title>Variáveis</title>
  </head>
  <body>
    <?php
      /*
        Nomeclatura de variáveis:
          - começar com uma letra ou _
          - não possuir caracteres especiais (+-;.,~^...)
          - pode conter numeros, mas nao no inicio do Nome
        Na atribuicao ou leitura, nao esquecer o $
      */

      //Tipos numericos inteiros
      $ndecimal = 10;
      $noctal = 010; // 01234567 em binário: 000 001 000 -> 3bits
      $nhexidecimal = 0x10; // 0123456789ABCDEF em binário: 0001 0000 -> 4bits

      echo "$ndecimal $noctal $nhexidecimal";
      echo "<br>";

      //Tipos numericos ponto flutuante
      $nd = 0.125; //padrao
      $nv = .125;
      $nexpoente1 = 2e10; //2^10
      $nexpoente2 = 2e-2; //2^-2
      echo "$nd $nv $nexpoente1 $nexpoente2";
      echo "<br>";

      // Tipo String
      $s1 = "Sou um texto";        // Utilize aspas duplas
      $s2 = 'Também sou um texto'; // Utilize aspas simples
      $s3 = "variavel s1 = $s1";   // Imprimindo o conteudo de s1
      $s4 = 'variavel s1 = $s1';   // Imprimindo 's1' - principal diferenca entre " e '
      echo "$s1";
      echo "<br>";
      echo "$s2";
      echo "<br>";
      echo "$s3";
      echo "<br>";
      echo "$s4";
      echo "<br>";

      // Tipo boolean
      $b1 = true;     // true ou TRUE ou TRue, nao faz diferenca
      $b2 = TRUe;     // true ou TRUE ou TRue, nao faz diferenca
      $b3 = false;    // false ou FALSE..., etc, nao faz diferenca
      $b4 = FALSE;    // false ou FAlse..., etc, nao faz diferenca
      echo "b1 = $b1 ";
      echo "b2 = $b2 ";
      echo "b3 = $b3 "; //

    ?>
  </body>
</html>
