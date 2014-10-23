<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4.10</title>
    </head>
    <body>
        <?php
        $dir = "fotos";
        $dirMini = "miniaturas2";
        echo "<h1>Galeria de Imagenes con MINIATURAS de previsualizacion si no existe la CREA !!</h1>";
        function validar_fotos($fotos)
        {
            $rs = 0;
            if (ereg("[Jj][Pp][Gg]$", $fotos)) $rs=1;
            if (ereg("[Gg][Ii][Ff]$", $fotos)) $rs=1;
            if (ereg("[Pp][Nn][Gg]$", $fotos)) $rs=1;
            if (ereg("[Bb][Mm][Pp]$", $fotos)) $rs=1;
            
            return $rs;
        }
        function crea_miniatura($foto){
            if (!is_dir("$dir/$dirMini")) {
                mkdir("$dir/$dirMini", 0777, TRUE);
            }
            
            if (!is_file("$dir/$dirMini/MINI-$foto")) {
                system("convert -sample 50*50 /$dir/$foto /$dir/$dirMini/MINI-$foto");
            }
        }
        
        
        if ($gestor = opendir($dir)){
            echo "<table border = 2 style='width:100%' >";
            echo "<tr>";
            $i = 0 ;
            while (($archivo = readdir($gestor)) !== false) {
                if ($archivo != "." && $archivo != ".." && validar_fotos($archivo)){
                    crea_miniatura($archivo);
                    if($i == 4){
                        $i = 0;
                        echo "</tr>";
                        echo "<tr>";
                    }
                    $i++;
                    echo "<td>";
                    echo "<a href=$dir/$dirMini/MINI-$archivo>";
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
