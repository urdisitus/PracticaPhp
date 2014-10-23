<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4.5</title>
    </head>
    <body>
        <?php
        define(TAM, 15);
        echo "<table border = 1 style='width:100%' >";
        
        $num = 1;
        
        for ($r = 1; $r <= TAM; $r++) {
            
            if ($r % 2 == 0){ 
                echo "<tr style='background-color:#bdc3d6'>";
            }else{
                echo "<tr style='background-color:yellow'>";
            }
            for ($c = 1; $c <= TAM; $c++) {
                echo "<td style='text-align:center'>".$num."</td>";
                $num++;
            }
            echo "<tr>";
            
        }
        
        echo "</table>";
        ?>
        ?>
    </body>
</html>
