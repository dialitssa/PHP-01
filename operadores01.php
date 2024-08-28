<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1> OPERADODRES 01 </h1>
<?php>
$num1 = 10; 
$num2 = 5;

// Realizar operaciones aritméticas
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;

// Evitar división por cero
if ($num2 != 0) {
    $division = $num1 / $num2;
} else {
    $division = "División por cero no permitida";
}

// Mostrar los resultados
echo "Número 1: $num1<br>";
echo "Número 2: $num2<br>";
echo "Suma: $suma<br>";
echo "Resta: $resta<br>";
echo "Multiplicación: $multiplicacion<br>";
echo "División: $division<br>";
?>
</body>
</html>cle