<?php
  session_start();
  //session_destroy();
?>
<!DOCTYPE html>
<html lang=”pt-br” dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Formulário - Sessão </title>
  </head>
  <body>
    <form method="post">
      <table border="0">
        <tr>
          <td>Nome: </td>
          <td><input type="text" name="nome"></td>
        </tr>
        <tr>
          <td>Idade: </td>
          <td><input type="number" name="idade"></td>
        </tr>
        <tr>
          <td>Telefone: </td>
          <td><input type="text" name="telefone"></td>
        </tr>
        <tr>
          <td><input type="submit" value="Enviar"></td>
        </tr>
      </table>
    </form>
    <br><hr>
    <?php
      if (count($_POST)) {
        $_SESSION['cadastro'][] = $_POST;
      }

      if (isset($_SESSION['cadastro']) && count($_SESSION['cadastro'])) {
        echo "<table border=\"0\"";
        foreach ($_SESSION['cadastro'] as $pessoa) {
          echo "<tr>";
          foreach ($pessoa as $atributo => $valor) {
            echo "<td><b>$atributo</b></td>";
            echo "<td>$valor</td>";
          }
          echo "</tr>";
        }
        echo "</table>";
      }
      else {
        echo "<h4>Não existem dados armazenados na sessão!</h4>";
      }


    ?>
  </body>
</html>
