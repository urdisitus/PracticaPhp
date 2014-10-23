<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
        <title>Ejercicio 5.4</title>
    </head>
    <body>
        <?php
        $f_estado = import_request_variables("pg", "f_");
        if (isset($f_estado) && $f_estado == 1) {
            
            echo "Son ";
            if ($f_conv == 1) {
                echo ($f_cantidad / 166.386) . " euros<br>";
            } else {
                echo ($f_cantidad / 180.386) . " dolares<br>";
            }
        }  else HIDDEN    
        ?>
        <!--juancaa-->
        <form method=post action=ejerc05-04.php>
            Introduzca la cantidad: <input type=text name=cantidad size=10>
            <input type=submit name=ok value=enviar>
            <br>
            Seleccione el tipo de conversion:<br>
            <input type=radio name=conv value=1 checked>Euros<br>
            <input type=radio name=conv value=2>dolares<br>
            <input type=hidden name=estado value=1>
        </form>
    </body>
</html>
