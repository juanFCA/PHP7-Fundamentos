<html>
  <head>
    <title>Switch Case</title>
  </head>
  <body>
    <?php

      $a = 3;
      if ($a == 1)
          echo "<p> a = um </p>\n";
      elseif ($a == 2)
          echo "<p> a = dois </p>\n";
      elseif ($a == 3)
          echo "<p> a = tres </p>\n";
      else
          echo "<p> a = nao sei </p>\n";

      switch ($a) {
        case 1:
          echo "<p> a = um </p>\n";
          break;
        case 2:
          echo "<p> a = dois </p>\n";
          break;
        case 3:
          echo "<p> a = tres </p>\n";
          break;
        default:
          echo "<p> a = nao sei </p>\n";
          break;
      }

      echo "<hr>";

      $a = 1;
      if($a == 1 || $a == 2) {
        echo "<p>A = 1 ou A = 2</p>";
      }
      elseif ($a == 3 || $a == 4) {
        echo "<p>A = 3 ou A = 4</p>";
      }
      else {
        echo "<p>Nao sei</p>";
      }

      switch ($a) {
        case 1:
          echo "<p>A = 1 ou A = 2</p>";
          break;
        case 2:
          echo "<p>A = 1 ou A = 2</p>";
          break;
        case 3:
          echo "<p>A = 3 ou A = 4</p>";
          break;
        case 4:
          echo "<p>A = 3 ou A = 4</p>";
          break;
        default:
          echo "<p> a = nao sei </p>\n";
          break;
      }


    ?>
  </body>
</html>
