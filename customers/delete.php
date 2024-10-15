<?php 
  require_once('functions.php'); 

  if (isset($_GET['id'])){
    try{
      $usuario = find("usuarios", $_GET['id']);
      delete($_GET['id']);
      unlink("uploads/" . $usuario['photo']);
    } catch(Exception $e){
      $_SESSION['message'] = "Não foi possivel realizar a operação: " . $e->getMessage();
      $_SESSION['type'] = "danger";
    }
  } 
  
?>