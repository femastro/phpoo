<?php 
    require "src/Conectar.php";
    require "src/Borrar.php";

    $borrar = new Borrar();
    
   	$borrar->delete($_GET['opcion']);

 	header('refresh:0;url=index.php');
?>
