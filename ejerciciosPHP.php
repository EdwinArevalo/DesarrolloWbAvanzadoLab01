<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicios PHP</title>


    <!-- Ejercicio A -->
    <?php 
    
        if(isset($_POST)){
            $ventas = $_POST['inputVentas'];
            if( $ventas >=0 && $ventas <= 150){
                $comision = "Ud no recibe comisión";
            }else if($ventas > 150 && $ventas <= 400){
                $comision =  ($ventas * 0.10);
            }else if($ventas > 400){
                $comision = 50 + ($ventas * 0.09);
            }else{
                $comision = "Ingrese una cantidad  válida";
            }
            
        }

    ?>

    <!-- Ejercicio B -->
    <?php 

        if(isset($_POST)){
            $numero = $_POST['numero'];
            $resultado = "";
            if($numero % 2){
                $resultado  = "Número impar ";
            }else{
                $resultado = "Número par ";
            }
        }
    ?>

    <!-- Ejercicio C -->
    <?php 
    
    ?>

    <!-- Ejercicio D -->
    <?php 
    
    ?>

</head>
<body>
    
    <form method="POST">
    <h4>Calculo de comisión</h4>
        <p>Ingrese en total de ventas: <input type="text" name="inputVentas" size="20" value="<?php echo $ventas; ?>"></p>
        <p><input type="submit" value="Calcular"></p>
        <p>Su comisión es S/. <?php echo $comision; ?></p>

    </form>
    <hr>

    <form method="POST">
        <h4>Verificar un número par o impar</h4>
        <p>Ingrese un número entero: <input type="text" name="numero" size="20" value="<?php echo $numero; ?>"></p>
        <p><input type="submit" value="Verificar"></p>
        <p> <?php echo $resultado; ?> </p>

    </form>

    <hr>

</body>
</html>