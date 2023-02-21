<?php
    /*Realice aplicación que permita simular en pantalla la serie de
    números de Fibonacci. Los primeros 50 valores.   */
   
    //se definen 2 variables para hacer el cálculo y se deja una sin definir, que es donde se le agregará la suma de estas.
   $num1=0;
   $num2=1;
   $num3;

    // se le aplica salto de línea para que queden una debajo de otra, como se muestra en el ejemplo del reto.
    echo $num1 . "<br>" . $num2 . "<br>";

    // Se hace un ciclo for para que itinere desde 0 a 50
   for ($i = 0; $i <50; $i++){
    $num3 = $num1 +  $num2;
    $num1 = $num2;
    $num2 = $num3;

    echo $num3 . "<br>";

   }
?>