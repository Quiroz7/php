<?php
    /*Realice una aplicación que permita
mostrar en pantalla únicamente los
números pares descritos en el arreglo
y al finalizar mostrar en pantalla la
cantidad de números pares y la
cantidad de números impares. Utilice
la declaración break o continue.  */
   
    $numeros=array (5, 23, 12, 8, 34, 27, 5, 2, 90, 3, 44, 6, 77, 55, 9, 38,10);
    

    $x=0;
    $contapar=0;
    $contaimpar=0;

    foreach($numeros as $num){
        
        if ($num % 2 == 0){
            
            $x++;
            echo "El " . $num . " es par" . "<br>";
            $contapar++;
        }else{
            $contaimpar++;
        }  
    }
    
    echo "la cantidad de números pares son:"  . $contapar . "<br>";
    echo "la cantidad de números impares son:" . $contaimpar . "<br>";

?>