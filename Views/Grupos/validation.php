<?php
  require('../../model/db/cnxion.php');

  $cxion = new Conexion();

  session_start();

  if(!isset($_SESSION['user_id'])){
    header('Location: ../../index.php');
  }
    
?>