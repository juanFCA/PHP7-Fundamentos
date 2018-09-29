<html>
  <head>
    <title> Arrays </title>
  </head>
  <body>
    <?php
      $meuarray = [10,20,30,40,50,60,70];
      #Própio para array ele é mesnos verboso que o var_dump
      print_r($meuarray);
      echo "<br>";

      /*
      #Outra forma de declaração de array
      $meuarray2 = array(10,20,30,40,50,60,70);
      print_r($meuarray2);
      */

      echo "<br>";
      echo "Primeira posição: $meuarray[0] <br>";
      echo "Segunda posição: $meuarray[1] <br>";
      echo "Terceira posição: $meuarray[2] <br>";
      echo "Última posição: $meuarray[6] <br><br>";
      # Essa linha dará erro
      #echo "Depois da última posição: $meuarray[7] <br>";

      #Inserindo valores no array em posições continuas
      $a = [];
      $a[] = 100;
      $a[] = 200;
      $a[] = 300;
      $a[] = 400;
      $a[] = 500;
      #trocando valor da posição e também obrigando a posição
      $a[4] = 600;
      $a[5] = 700;
      #também podemos inserir diversos tipos de valores
      $a[] = "800";
      $a[] = "Minha string";
      $a[] = 700.99;
      $a[] = true;
      var_dump($a);
      echo "<br><br>";

      #Arrays associativos
      $b[0] = "zero";
      $b['1'] = 1;
      $b['b'] = "Letra b";
      $b['Letra c'] = "letra c";
      var_dump($b);
      echo "<br><br>";

      #Array de Arrays
      $a = [];
      $a[0] = [1, 2, 3];
      $a[1] = [0 => 10, 1 => 20, 2 => 30];
      $a[2] = ["Letra a" => "a","Letra b" => "b"];
      var_dump($a);
      echo "<br><br>";

      #Vamos declarar um array de pessoas
      echo "<h2>Pessoas: </h2>";
      $pessoas1["Joao"] = ["Idade" => 20, "Pai" => "Joaquim", "Cidade" => "São Paulo SP"];
      var_dump($pessoas1);
      echo "<br><br>";
      #Outra forma
      $pessoas["Joao"]["Idade"] = 20;
      $pessoas["Joao"]["Pai"] = "Joaquim";
      $pessoas["Joao"]["Cidade"] = "São Paulo SP";
      $pessoas["Abel"]["Idade"] = 50;
      $pessoas["Abel"]["Pai"] = "Manuel";
      $pessoas["Abel"]["Cidade"] = "Campinas SP";
      var_dump($pessoas);
      echo "<br><br>";

      #Impressõs e concatenação
      echo "Idade do Abel: " . $pessoas["Abel"]["Idade"] . " Anos";

      #Algumas operações
      $a = [1,2,3,4,5,6,7,8,9];
      echo "<p> Numero de elementos de a : " . count($a) . "</p>";
      echo "<p> Numero de elementos de pessoas : " . count($pessoas) . "</p>";
      echo "<p> Numero de elementos de pessoas[Abel] : " . count($pessoas["Abel"]) . "</p>";
    ?>
  </body>
</html>
