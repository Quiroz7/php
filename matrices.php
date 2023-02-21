<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
        $factura=array(
            array("computer",3,2300000),
            array("chair",4,1500000),
            array("table",4,500000),
            array("desk",1,900000),
            array("briefcase",5,73000)
        );

        $total=0;
        $cant= count($factura);
        
        echo "<table>";
        echo "<caption>Factura de venta N° 2559218</caption>";
        echo "<thead><tr> 
                <th>Elemento</th> 
                <th>Cantidad</th>
                <th>Valor</th> 
                <th>Subtotal</th> 
                </tr> 
              </thead> 
              <tbody>";

            for($filas = 0; $filas < $cant;$filas++){

                $subtotal = $factura[$filas][1] * $factura[$filas][2];
                $total += $subtotal;
                echo "<tr>";

                for($columnas = 0;$columnas < 3;$columnas++){
                    if ($columnas <= 1){
                    echo "<td>". $factura[$filas][$columnas]."</td>";
                }else{
                    echo "<td> $" .number_format($factura[$filas][$columnas],0,',','.')."</td>"; 
                    echo "<td> $".number_format($subtotal,0,',','.')."</td>";
                }
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
        echo "TOTAL A PAGAR: $"  .number_format($total,0,',','.'); 
    ?>
    
</body>
</html>