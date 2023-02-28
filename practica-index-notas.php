/* Realice una aplicación que permita
capturar un numero determinado de
calificaciones de un estudiantes y en
pantalla el sistema muestre su
promedio, además si aprueba o no la
asignatura.

Para aprobar la calificación mínima es
de 3.7   */

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3>Sistema de Calificación</h3>
    <?php if (!$_POST) { ?>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" >
            <label> Número de Calificaciones</label>
            <input type="number" name="numcali" id="numcali" size="20" required>
            <input type="submit" value="Enviar">
        </form>
    <?php } elseif (isset($_POST['numcali'])) { ?>
        
        <form action="practica-promedio-notas.php" method="POST">
        <?php
            $num = $_POST['numcali'];
            for($i = 0; $i < $num; $i++){ ?>
                <label>Calificación <?php echo $i+1 ?> :</label>
                <input type="number" name="calificaciones[]" value="" min="0" max="5" step="any" required/>
                <br> <?php
            }  ?> 

            <input type="submit" value="Enviar" />
        </form> 
    <?php } ?>      

    
     
</body>
</html>

