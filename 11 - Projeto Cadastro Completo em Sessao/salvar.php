<?php
  session_start();
  if (isset($_POST['id']) && $_POST['id'] != '') {
    $id = $_POST['id'];
    $_SESSION['cadastropessoal'][$id]['nome']     = $_POST['nome'];
    $_SESSION['cadastropessoal'][$id]['idade']    = $_POST['idade'];
    $_SESSION['cadastropessoal'][$id]['telefone'] = $_POST['telefone'];
    $_SESSION['cadastropessoal'][$id]['endereco'] = $_POST['endereco'];
    $_SESSION['cadastropessoal'][$id]['cidade']   = $_POST['cidade'];
    $_SESSION['cadastropessoal'][$id]['estado']   = $_POST['estado'];
  }
  elseif(count($_POST)) {
    //var_dump($_POST);
    $_SESSION['cadastropessoal'][] = $_POST;
  }
  header('Location: listar.php');
?>
