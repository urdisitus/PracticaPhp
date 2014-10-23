<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4.9</title>
    </head>
    <body>
        <?php
        echo "<h1>Galeria de Imagenes con MINIATURAS de previsualizacion</h1>";
        function validar_fotos($fotos)
        {
            $rs = 0;
            if (ereg("[Jj][Pp][Gg]$", $fotos)) $rs=1;
            if (ereg("[Gg][Ii][Ff]$", $fotos)) $rs=1;
            if (ereg("[Pp][Nn][Gg]$", $fotos)) $rs=1;
            if (ereg("[Bb][Mm][Pp]$", $fotos)) $rs=1;
            
            return $rs;
        }
        $dir = "fotos";
        if ($gestor = opendir($dir)){
            echo "<table border = 2 style='width:100%' >";
            echo "<tr>";
            $i = 0 ;
            while (($archivo = readdir($gestor)) !== false) {
                if ($archivo != "." && $archivo != ".." && validar_fotos($archivo)){
                    if($i == 4){
                        $i = 0;
                        echo "</tr>";
                        echo "<tr>";
                    }
                    $i++;
                    echo "<td>";
                    echo "<a href=$dir/miniaturas/MINI-$archivo>";
                    echo"<img src = $dir/$archivo width=200 height=200></a>"; // se cambio a 200*200 para que se note la diferencia porq las fotos miniaturas son de 100 *100
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
