<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4.4</title>
    </head>
    <body>
        <?php
        echo "<table border = 1 style='width:100%' >";
        
        $num = 1;
        
        for ($r = 1; $r <= 10; $r++) {
            
            echo "<tr>";
            for ($c = 1; $c <= 10; $c++) {
                echo "<td style='text-align:center'>".$num."</td>";
                $num++;
            }
            echo "<tr>";
            
        }
        
        echo "</table>";
        ?>
    </body>
</html>
