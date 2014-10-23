<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">

        <title>Ejercicio 5.1</title>
    </head>
    <body>
        <?php
        import_request_variables("pg", "f_");
        echo "Son ";
        echo $f_euros * 166.386;
        echo " pesetas";
        ?>
    </body>
</html>
