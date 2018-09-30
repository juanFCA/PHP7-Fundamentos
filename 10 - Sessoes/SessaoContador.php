<?php
  session_start();

  if(!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 1;
  }
  else {
    $_SESSION['contador']++;
  }

  $msg = "Você já visitou este site " . $_SESSION['contador'] . " vezes nesta sessão.";

  if ($_SESSION['contador'] >= 20) {
    session_destroy();
  }

?>
<html>
  <head>
    <title>Contador de Visitas</title>
  </head>
  <body>
    <h1> <?php echo $msg; ?> </h1>
  </body>
</html>
