<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">

        <meta charset="UTF-8">
        <title>Ejercicio 5.2</title>
    </head>
    <body>
        <?php
        import_request_variables("pg", "f_");
        echo "Son ";
        if ($f_conv == 1) {
            echo $f_cantidad / 166.386;
            echo " euros";
        } else {
            echo $f_cantidad / 180.386;
            echo " dolares";
        }
        ?>
    </body>
</html>
