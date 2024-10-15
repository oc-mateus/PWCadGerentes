<?php 
  require_once('functionsAdm.php'); 

  if (isset($_GET['id'])){
    try{
      $usuario = find("usuarios", $_GET['id']);
      delete($_GET['id']);
      unlink("imagens/" . $usuario['photo']);
    } catch(Exception $e){
      $_SESSION['message'] = "Não foi possivel realizar a operação: " . $e->getMessage();
      $_SESSION['type'] = "danger";
    }
  } 
  
?>