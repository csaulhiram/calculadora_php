<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <h1>Calculadora</h1>

    <form action="operacion.php" method="GET">
        <label for="number1">Digita el primer número</label>
        <input type="text" name="number1" id="">

        <label for="number2">Digita el segundo número</label>
        <input type="text" name="number2" id="">

        <input type="radio" name="operacion" value="sumar" id="">
        <label for="sumar">Sumar:</label>

        <input type="radio" name="operacion" value="restar" id="">
        <label for="restar">Restar:</label>

        <input type="radio" name="operacion" value="dividir" id="">
        <label for="dividir">Dividir:</label>

        <input type="radio" name="operacion" value="multiplicar" id="">
        <label for="multiplicar">Multiplicar:</label>

        <br>
        <input type="submit" value="Realizar operación">
    </form>

    <?php if(isset($_GET['resultado'])): 
        echo "<h1>Resultado:". $_GET['resultado'] ."</h1>";
    endif;?>
</body>

</html>