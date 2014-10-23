<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
        <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4.8</title>
    </head>
    <body>        
        <?php
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
                    echo "<a href=$dir/$archivo><img src = $dir/$archivo width=100 height=100>  </a>";
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
