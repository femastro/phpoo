<?php 
	require "src/Conectar.php";
    require "src/Alta.php";

    $alta = new Alta();

    if (!empty($_POST['name'])) {
    	$alta->personasName = $_POST['name'];
    	$alta->personasEdad = $_POST['edad'];
    	$alta->save();
    	header('refresh:0;url=index.php');
    }

    require "html/user.php";
?>