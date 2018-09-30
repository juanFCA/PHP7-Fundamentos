<!DOCTYPE html>
<html>
  <head>
    <title>Operações: Números ponto Flutuantes</title>
  </head>
  <body>
    <?php
      #Operações Básicas
      $f = 100.65;
      $soma = $f + 150;
      $subtracao = $f - 70;
      $multiplicacao = $f * 4;
      $divisao = $f / 3;
      printf("<p>F = %f, Soma = %f, Subtração = %f, Multiplicação = %f, Divisão = %f</p>",
            $f, $soma, $subtracao, $multiplicacao, $divisao);

      #Operação de Round
      $r = 15.566;
      $r0 = round($r);
      printf("<p>Meu r0 = %f</p>", $r0);
      #Presição de casas decimais
      $r1 = round($r, 1);
      printf("<p>Meu r1 = %f</p>", $r1);
      $r2 = round($r, 2);
      printf("<p>Meu r2 = %f</p>", $r2);

      #Operação ceil(Vai para cima) e floor(Vai para baixo)
      $r = 15.366;
      $r0 = ceil($r);
      printf("<p>Meu r0 = %f (Ceil)</p>", $r0);
      $r0 = floor($r);
      printf("<p>Meu r0 = %f (Floor)</p>", $r0);

      #Passando para InfiniteIterator
      $f = 32.789;
      var_dump(intval($f));
      $i = intval($f);
      printf("<p>I = %d </p>", $i);

      #Potenciação (pow)
      $p = pow(2, 10);
      printf("<p>Pow de 2 a 10 = %f</p>", $p);
      $p = pow(2.1, 10);
      printf("<p>Pow de 2.1 a 10 = %f</p>", $p);

      //Números aleatórios
      $r = rand();
      printf("<p> Rand = %10.4f </p>", $r);
      printf("<p> Rand = %10.4f </p>", rand());
      printf("<p> Rand = %10.4f </p>", rand());
      #Valores de geração entre numeros
      printf("<p> Rand(1 e 10) = %10.4f </p>", rand(1,10));
      printf("<p> Rand(1 e 1000) = %10.4f </p>", rand(1,1000));
    ?>
  </body>
</html>
