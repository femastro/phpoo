<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Clientes</title>
        <link rel="stylesheet" href="html/css/estilo.css">
    </head>
    <body> 
        <br><br>
        <div class="contenedor">
            <h1>Listado</h1>
            <table>
                <tr>
                    <th colspan="4" class="td"><strong>Consulta de Clientes</strong></th>
                </tr>
                <tr>
                    <th class="td">Id</th>
                    <th class="td">Nombre</th>
                    <th class="td">Edad</th>
                    <th class="td">
                        <a href="alta.php"><button>Crear</button></a>
                    </th>
                </tr>
                <?php 
                    $x = 0;
                    while ($x < $cont) {
                ?>
                        <tr>
                            <td class="td"><?php echo $jugadores[$x]->getPersonasId()?></td>
                            <td class="td"><?php echo strtoupper($jugadores[$x]->getPersonasName())?></td>
                            <td class="td"><?php echo $jugadores[$x]->getPersonasEdad()?></td>
                            <td class="td"><a href="borrar.php?opcion=<?php echo $jugadores[$x]->getPersonasId()?>"><button>Eliminar</button></a></td>
                        </tr>
                <?php
                        $x++;
                    }
                ?>
                <tr>
                    <td colspan="4" class="td"> Total de Registros : <?php echo $cont; ?></td>
                </tr>
            </table>
        </div>
        <br>
        <div class="contenedor">
            <form action="" method="POST">
                <div class="centrar">
                    <input type="text" name="search" placeholder="Buscar"><input type="submit" value="  Buscar  ">
                </div>
            </form>
        </div>
        <br><br>
        <div class="contenedor">
            <a href="http://www.w3.org/html/logo/">
                <img src="https://www.w3.org/html/logo/badge/html5-badge-h-css3-semantics.png" width="165" height="64" alt="HTML5 Powered with CSS3 / Styling, and Semantics" title="HTML5 Powered with CSS3 / Styling, and Semantics">
            </a>
        </div>
    </body>
</html>