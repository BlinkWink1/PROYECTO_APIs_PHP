<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // string 
    $nombre = "Juan";
    // integer - int
    $edad = 25;
    // string
    $_ciudad = "Madrid";
    // Float
    $precios = 10.99;
    // Boolean  - bool
    $verdadero = true;
    $falso = false;
    // Array
    $colores = ["rojo", "verde", "azul;"];
    // Vacio
    $vacia = null;

    $variable ="10";
    $variable = $variable + 2;
    echo $variable; //imprime 12
    
    // Object
    $coche = (object)["marca"=>"ford", "modelo"=>"fiesta"];
    echo "Hola, $nombre";

    ?>
</body>
</html>