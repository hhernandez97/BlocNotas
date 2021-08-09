<?php

$archivo=fopen("archivo.txt","r")
or die ("Error al abrir el archivo");

    while(!feof($archivo))
    {
        $traer = fgets($archivo);
        $saltodelinea = nl2br($traer);
        echo $saltodelinea;
    }

?>

<style>
.boton {
   padding: 10px;
   background-color: lightblue;
   color: white;
}
</style>
<a href="index.php" class="boton">VOLVER</a>