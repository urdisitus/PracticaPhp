<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4.7</title>
    </head>
    <body  >
       
        <?php
        $dir = "fotos";
        if ($gestor = opendir($dir)){            
            echo "<table border = 2 style='width:100%' >";
            echo "<tr>";
            $i = 0 ;
            while (($archivo = readdir($gestor)) !== false) {
                
                if ($archivo != "." && $archivo != ".."){                    
                    if($i == 4){
                        $i = 0;
                        echo "</tr>";
                        echo "<tr>";
                    }
                    $i++;
                    echo "<td>";
                    echo "<a href=$dir/$archivo><img src = $dir/$archivo> </a> ";
                    echo "</td>";
                }
            }
            echo "</tr>";
            echo "</table>";
            closedir($gestor);
        }
        ?>
    </body>   
</html>
