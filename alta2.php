<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="GENERATOR" content="Quanta Plus">
        <meta http-equiv="Content-Type" content="text/html; charset=iso8859-1">
        <title>Alta2</title>
    </head>
    <body>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";

        import_request_variables("P", "f_");
        $linea1 = "INSERT INTO empresas (nombre, web, telef, sector,
descrip, karma) ";
        $linea2 = " VALUES ('$f_nombre', '$f_web', '$f_telef', '$f_sector',
'$f_descrip', '$f_karma') ";
        $consulta = $linea1 . $linea2;
echo $consulta;
        if (!$link = mysql_connect($servername, $username, $password)) {
            
        }
        echo "<a href=index.html>Error al conectar</a>";
        exit;
        if (!mysql_select_db("pruebaphp")) {
            echo "<a href=index.html>Error al seleccionar BDD</a>";
            exit;
        }
        if (!$result = mysql_query($consulta, $link)) {
            
        }
        echo "<a href=index.html>Error en la consulta</a>";
        exit;
        echo "<br>Alta correcta";
        echo "<br><br><a href='alta.html'>Otra alta</a>";
        echo "<br><br><a href='index.html'>Inicio</a>";
        mysql_close($link);
        ?>
    </body>
</html>
