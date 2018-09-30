<html>
  <head>
    <title>Exercícios</title>
  </head>
  <body>
    <?php

    function imprimirDadosPessoas($array_pessoas){
      foreach ($array_pessoas as $nome => $pessoa_atributos) {
        echo "<p>Nome: $nome <br>";
        foreach ($pessoa_atributos as $tipo => $valor) {
          echo "$tipo: $valor <br>";
        }
        echo "</p><hr>";
      }

    }

    $pessoas["joao"]["idade"]     = 20;
    $pessoas["joao"]["pai"]       = "Joaquim da Silva" ;
    $pessoas["joao"]["endereco"]  = "Rua Cascavel, 450" ;
    $pessoas["joao"]["telefone"]  = "45 98111-8787" ;

    $pessoas["mara"]["idade"]     = 23;
    $pessoas["mara"]["pai"]       = "Jose de Souza" ;
    $pessoas["mara"]["endereco"]  = "Av. Argentina, 120" ;
    $pessoas["mara"]["telefone"]  = "11 97845-5656" ;

    $pessoas["andressa"]["idade"]     = 25;
    $pessoas["andressa"]["pai"]       = "Jose de Souza" ;
    $pessoas["andressa"]["endereco"]  = "Av. Argentina, 120" ;
    $pessoas["andressa"]["telefone"]  = "11 97845-5656" ;

    imprimirDadosPessoas($pessoas);

    ?>
  </body>
</html>
