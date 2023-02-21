<?php
    $compras = array(
        array("item"=>1,"article"=>"computer","quantity"=>3,"cost"=>2300000),
        array("item"=>2,"article"=>"chair","quantity"=>4,"cost"=>1500000),
        array("item"=>3,"article"=>"table","quantity"=>2,"cost"=>500000),
        array("item"=>4,"article"=>"desk","quantity"=>1,"cost"=>900000),
        array("item"=>5,"article"=>"briefcase","quantity"=>5,"cost"=>73000),
    );

    $subtotal =0;
    $total=0;
    //le doy tamaño y borde a la table
    echo "<table width = '900px' border solid = '2' ";
   //tr esta etiqueta es para hacer el contenido de la tabla
    // tr para hacer el encabezado
   echo "<tr>
            <th>Item</th>
            <th>Article</th>
            <th>Quantity</th>
            <th>Cost</th>
            <th>Subtotal</th>
         </tr>" ;

    foreach($compras as $compra){

        $subtotal = $compra["quantity"] * $compra["cost"];
        $total += $subtotal;

        echo "<tr><th>" . $compra["item"] . "</th><th>" . $compra["article"] . "</th><th>" . $compra["quantity"] . "</th><th>" . $compra["cost"] . "</th><th>" . $subtotal;

    }     

    echo "</table>";
    echo "<br>";
    echo "you must pay: " . $total . " $";

?>