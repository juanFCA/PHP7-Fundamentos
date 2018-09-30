<!DOCTYPE html>
<html>
  <head>
    <title>Operações: Arrays</title>
  </head>
  <body>
    <?php
      $a1 = [10,20,30,40,50,60,70,80];
      $a1[] = 90;
      $a1[9] = 100;
      var_dump($a1);

      #Contando o tamanho da array
      $c = count($a1);
      echo "<br>Tamanho de a1 = $c <br>";

      #Se o elemento esta setado ou não
      $b = isset($a1[9]);
      echo "<br> isset(a1[9]) = "; var_dump($b);

      #array_keys -> sera um array que contém os indices do meu array
      $a1_keys =  array_keys($a1);
      echo "<br> array_keys(a1) = "; var_dump($a1_keys);
      $a2 = ["key1" => "valor 1", "key 2" => "valor 2"];
      $a2_keys = array_keys($a2);
      echo "<br> array_keys(a2) = "; var_dump($a2_keys);

      #Junção de Arrays -> array_merge
      $a1 = array("vermelho", "verde");
      $a2 = array("azul", "amarelo");
      $a3 = array_merge($a1, $a2);
      echo "<br> array_merge(a1, a2) = "; var_dump($a3);

      #funçao de preenchimento de array -> array_fill
      #passo pos inicial e final e o valor que desejo preencher nestes indices
      $a1 = array_fill(0, 4, "blue");
      echo "<br> array_fill(0, 4, blue)"; var_dump($a1);

      #array_reverse -> reverte o array;
      $a1 = [10,20,30,40,50,60];
      $a2 = array_reverse($a1);
      echo "<br> array_reverse(a1)"; var_dump($a2);

      #array_sum -> soma os valores do array
      $a1 = [10,20,30,40,50];
      $res = array_sum($a1);
      echo "<br> Soma dos valores = $res";

      #array_search -> busca elementos dentro do vetor
      $a1 = [10,20,30,40,50,60,70];
      $i = array_search(40, $a1);
      echo "<br>indice do 40 no a1 = $i";

      #array_values -> retorna os valores do array
      $a2 = ["key1" => "valor 1", "key 2" => "valor 2"];
      $a3 = array_values($a2);
      echo "<br>Valores de a2: "; var_dump($a3);

      # sort e rsort -> funcoes de ordenação
      $a1 = [40,20,10,90,80,30,50,60,70];
      # ordem crescente
      sort($a1);
      echo "<br>sort(a1) : "; var_dump($a1);
      # ordem decrescente
      rsort($a1);
      echo "<br>rsort(a1) : "; var_dump($a1);
      echo "<hr>";

      # asort e arsort -> ordenação de arrays associativos
      $a1 = ["key1"=>13, "key2"=>8, "key3"=>5, "key4"=>6];
      asort($a1);
      echo "<br>asort(a1) : "; var_dump($a1);
      # ordem decrescente
      arsort($a1);
      echo "<br>arsort(a1) : "; var_dump($a1);

      # array_multisort -> não funciona para associativo
      $a1 = array("maca","pera","melancia","abacate","limao","goiaba","laranja");
      array_multisort($a1);
      echo "<br>array_multisort(a1) : "; var_dump($a1);
      #muda a ordem
      array_multisort($a1, SORT_DESC);
      echo "<br>array_multisort(a1, SORT_DESC) : "; var_dump($a1);
      echo "<hr>";
      $a1 = array("maca","pera","melancia","abacate","limao","goiaba","laranja");
      $a2 = array("verm.","verde","verm.","verde","verde","rosada","laranj.");
      #muda a ordem do segundo de acordo com o primeiro
      array_multisort($a1, $a2);
      echo "<br>array_multisort(a1) : "; var_dump($a1);
      echo "<br>array_multisort(a2) : "; var_dump($a2);
      echo "<hr>";

      # array_slice -> pegar certa parte de um array
      $a1 = [10,20,30,40,50,60,70,80,90,100];
      #criou um vetor a partir da posição 5
      $r = array_slice($a1, 5);
      echo "<br> array_slice: "; var_dump($r);

      #in_array -> verifica se existe ou nao
      $a1 = [10,20,30,40,50,60,70,80,90,100];
      $b = in_array(43, $a1);
      echo "<br> b: "; var_dump($b);

      # end -> serve para pegar o ultimo elemento do vetor
      $a1 = [10,20,30,40,50,60,70,80,90,100];
      $ultimo = end($a1);
      echo "<br>Ultimo elemento = $ultimo";
      echo "<br><br><br><br><br><br><br>";

    ?>
  </body>
</html>
