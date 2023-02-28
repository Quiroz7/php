<?php
    function promedio ($calificaciones){
        $promedio = array_sum($calificaciones)/count($calificaciones);
        return $promedio;
    }

    function estado($promedio){
        if($promedio >= 3.7){
            $estado = "Aprobado";
        }else{
            $estado = "No Aprobado";    
        }
        return $estado;
    }
    $calificaciones = $_POST['calificaciones'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $promedio = promedio($calificaciones);
        $estado = estado($promedio);

        echo "Promedio: " . $promedio . " El estudiante " . $estado . " la asignatura";
    ?>
    
</body>
</html>


