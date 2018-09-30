<html>
<head>
<title> Laços de Repetição </title>
</head>
<body>

<?php
    // Laco de repeticao FOR
    for ($i=0; $i<10; $i++) {
        echo "(for) i = $i <br>\n";
    }
    echo "<hr>\n";

    for ($i=10; $i>=0; $i--) {
        echo "(for) i = $i <br>\n";
    }
    echo "<hr>\n";

    // Laco de repeticao WHILE
    $i = 0;
    while ($i < 10) {
        echo "(while) i = $i <br>\n";
        $i++;
    }
    echo "<hr>\n";

    $i = 10;
    while ($i) {
        echo "(while) i = $i <br>\n";
        $i--;
    }
    echo "<hr>\n";

    // Laco de repeticao FOREACH
    $a = [10,20,30,40,50];

    foreach ($a as $v) {
        echo "(foreach) v = $v <br>\n";
    }
    echo "<hr>\n";

    $a = [10,20,30,40,50];
    foreach ($a as $i=>$v) {
        echo "(foreach) a[$i] = $v <br>\n";
    }
    echo "<hr>\n";

    $produtos[] = ['nome'=>'computador', 'preco'=>50];
    $produtos[] = ['nome'=>'notebook', 'preco'=>500];

    foreach ($produtos as $produto) {
      foreach ($produto as $i => $valor) {
        echo "<p>$i = $valor</p>";
      }
      echo "<hr>";
    }
?>

</body>
</html>
