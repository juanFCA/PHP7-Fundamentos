<?php
  session_start();
  if (isset($_GET['id']) && $_GET['id'] != '') {
      $id = $_GET['id'];
      array_splice($_SESSION['cadastropessoal'], $id, 1);
  }
  header("Location: listar.php");
?>
