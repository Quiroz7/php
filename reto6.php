<?php
    $compras = array(
        array("Item" => 1, "Articulo" => "Computador", "Cantidad" => 3, "Valor" => 2300000),
        array("Item" => 2, "Articulo" => "Silla", "Cantidad" => 4, "Valor" => 1500000),
        array("Item" => 3, "Articulo" => "Mesa", "Cantidad" => 2, "Valor" => 500000),
        array("Item" => 4, "Articulo" => "Escritorio", "Cantidad" => 1, "Valor" => 900000),
        array("Item" => 5, "Articulo" => "Maletin", "Cantidad" => 5, "Valor" =>73000),
    );
    
    $subtotal =0 ;
    $total =0;
   
    //le doy tamaño y borde a la tabla
    echo "<table width = 400 border solid = 2";
   
    // tr esta etiqueta es  para hacer el contenido de las columnas.
    // th para hacer el encabezado.
    echo "<tr>                    
        <th>Item</th>
        <th>Articulo</th>
        <th>Cantidad</th>
        <th>Valor</th>
        <th>Subtotal</th>
         </tr>";

    foreach ($compras as $compra){
        
        $subtotal = $compra["Cantidad"] * $compra["Valor"];
        $total += $subtotal;
        echo "<tr><th>" . $compra["Item"] . "</th><th>"  .  $compra["Articulo"] . "</th><th>" . $compra["Cantidad"] . "</th><th>" . $compra["Valor"] . "</th><th>" . $subtotal;
    }

    echo "</table>";
    echo "<br>";
    echo "TOTAL A PAGAR: " . $total;
    
?>