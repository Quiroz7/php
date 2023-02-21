<?php

    $tiempos=array(23.45 , 24.95, 25.67, 28.34, 29.34, 22.56, 
    21.98, 20.33, 24.98, 25.67, 27.56, 28.34, 21.56, 20.32, 22.48, 21.95);

    function mostrartiempos($tiempos){
        
        echo "Los tiempos son: " . "<br>";
        
        foreach( $tiempos as $tiempo){
            echo $tiempo . "<br>";
        }
    }
    
    mostrartiempos($tiempos);
    
    echo "<br> <hr>";

    function promedios($tiempos){
    
        $promedio=0;
        $conta=0;

        foreach ($tiempos as $tiempo){
            $conta += $tiempo;
        }

        $promedio = $conta/count($tiempos);
        return $promedio;

    }

    $resultado = promedios($tiempos); 
    echo "El promedio de los tiempos es de: " . $resultado;

    
    echo "<br> <hr>";

//     function minimoYmaximo($tiempos){

        
//         $tiempoMaximo=(max(array($tiempos)));
//         $tiempoMinimo=(min(array($tiempos)));
//         return array($tiempoMaximo , $tiempoMinimo);
 
// }



    
?>