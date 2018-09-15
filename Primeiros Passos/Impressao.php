#<!DOCTYPE html>
<html>
  <head>
    <title>Impressão de Conteúdo</title>
  </head>
  <body>
    <?php
      #Pulando linhas e imprimindo com a função echo "";
      echo "Teste de Impressão utilizando o echo!\n";
      echo "<br>";
      echo "Teste de Impressão utilizando o echo!\n";
      #Impressão printf /n pula no código mas não na execução dele
      printf("<p>Teste de Impressão utilizando o printf!</p>\n");

      $texto = "Teste de variável<br>\n";
      echo $texto;
      printf("<h1> %s </h1>", $texto);

      $inteiro = 180;
      echo $inteiro;
      printf("<p> %d </p>", $inteiro);
      printf("<p> %08d </p>", $inteiro);
      printf("<p> %08d </p>", 5);
      printf("<p> %08d </p>", 85000);

      $decimal = 80.10;
      printf("<p> %f </p>", $decimal);
      printf("<p> %8.2f </p>", $decimal);
      printf("<p> %010.2f </p>", $decimal);

      $texto2 = "Meu Texto";
      printf("%s", $texto2);
      printf("<p> meu texto: %15s </p>", $texto2);
      printf("<p> meu texto: %.5s </p>", $texto2);

      #Retorna tipo e tamanho da minha variável
      var_dump($texto);
        echo "<br>";
      var_dump($inteiro);
        echo "<br>";
      var_dump($decimal);
        echo "<br>";
      var_dump($texto2);
        echo "<br>";

      ?>
  </body>
</html>
