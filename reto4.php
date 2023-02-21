<?php
    /*Realice una aplicación que permita
calcular el valor promedio de marca,
valor mínimo de marca, valor máximo de
marca y la cantidad de marcas, de un
grupo de marcas de los nadadores
olímpicos en la categoría de 50m pecho
colombianos. Marcas es igual a tiempos.  */
    
    $marcasTiempo = array (23.67, 22.89, 20.45, 19.56, 24.23, 25.67, 29.56,
    22.34, 25.67, 28.12, 29.63, 22.56, 27.89, 20.45, 28.12, 22.34);

    $x=0;
    $promedioMarca;
    $marcaMinima;
    $marcaMaxima;
    $cantidad;

    foreach($marcasTiempo as $marca){
        $x+=$marca;
    }

    $promedioMarca = $x/count($marcasTiempo);
    $marcaMaxima = max($marcasTiempo);
    $marcaMinima = min($marcasTiempo);

    echo "El valor promedio de marca es de: " . $promedioMarca . "<br>";
    echo "el valor mínimo de marca es de: " . $marcaMinima . "<br>";
    echo "El valor máximo de marca es de: " . $marcaMaxima . "<br>";

        
        
    








?>