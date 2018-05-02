<?php
    require "src/Conectar.php";
    require "src/Jugadores.php";

    if (!empty($_POST['search'])) {
    	$search= "%".$_POST['search']."%"; ///la busqueda inica aqui!
    }else{
    	$search= "%%";
    }


    $jugadores = new Jugadores();

    $jugadores= $jugadores->all($search); // carga los datos en la clase. y ejecuta la funcion enviando el dato de busqueda para el SQL y Recibe el array que devuelve la function all() de Jugadores.php

    $cont= count($jugadores); // cuenta la cantidad de elementos dentro de un array.

    require "html/listado.php";

?>

