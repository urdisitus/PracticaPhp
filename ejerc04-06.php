<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4.6</title>
    </head>
    <body>
        <?php
            define(TAM, 4);
            function potencia($base , $exponente){
                $resultado = pow($base, $exponente);
                return $resultado;
            }
            
            echo "<table border = 2 style='width:100%' >";
        
            for ($r = 1; $r <= TAM; $r++) {

                echo "<tr>";
                    for ($c = 1; $c <= TAM; $c++)
                        echo "<td style='text-align:center'>".potencia($r, $c)."</td>";
                    
                echo "<tr>";
            }

            echo "</table>";
        ?>
    </body>
</html>
