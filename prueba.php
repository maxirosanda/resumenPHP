<?php
    $numero = 10; // Esto es un número entero (integer)
    $texto = "Hola Mundo"; // Esto es una cadena de texto (string)
    $decimal = 3.14; // Esto es un número decimal (float)
    $verdadero = true; // Esto es un booleano (true/false)

    $nombre = "Juan";
    $apellido = "Pérez";
    $nombre_completo = $nombre . " " . $apellido;

    // Array numérico
    $numeros = array(1, 2, 3, 4, 5);

    // Array asociativo
    $persona = array(
        "nombre" => "Juan",
        "edad" => 25,
        "ciudad" => "Madrid"
    );

    $edad = 30;
    if ($edad >= 18) {
        echo "Eres mayor de edad";
    } else {
        echo "Eres menor de edad";
    }

    $dia = "Lunes";

    switch ($dia) {
        case "Lunes":
            echo "Hoy es lunes.";
            break;
        case "Martes":
            echo "Hoy es martes.";
            break;
        case "Miércoles":
            echo "Hoy es miércoles.";
            break;
        default:
            echo "Hoy no es ninguno de los días mencionados.";
    }
    print "Hola Mundo";

    for ($i = 1; $i <= 5; $i++) {
        echo $i . " ";
    }

    $i = 1;
    while ($i <= 5) {
        echo $i . " ";
        $i++;
    }

    $i = 1;
    do {
        echo $i . " ";
        $i++;
    } while ($i <= 5);

    //pasar objeto php a json
    $datos = array(
        "nombre" => "Juan",
        "edad" => 25,
        "ciudad" => "Madrid"
    );
    
    $json_datos = json_encode($datos);
    echo $json_datos;

    //pasar json a objeto php (array asociativo)
    $json_datos = '{"nombre": "Juan", "edad": 25, "ciudad": "Madrid"}';

    $datos = json_decode($json_datos, true);
    echo $datos['nombre']; // Salida: Juan
    echo $datos['edad'];   // Salida: 25
    echo $datos['ciudad']; // Salida: Madrid


    //metodos y propiedades en php
    $numeros = [1, 2, 3];
    array_push($numeros, 4);

    $frutas = ['manzana', 'pera', 'naranja', 'uva'];
    array_splice($frutas, 1, 2); // Elimina 2 elementos a partir del índice 1

    $numeros = [1, 2, 3, 4];
    foreach ($numeros as $numero) {
    echo $numero . "\n";
    }

    $numeros = [1, 2, 3, 4];
    $hayPares = false;
    foreach ($numeros as $numero) { //some
        if ($numero % 2 === 0) {
         $hayPares = true;
         break;
        }
    }

    $numeros = [1, 2, 3, 4];
    $pares = array_filter($numeros, function($numero) {
         return $numero % 2 === 0;
    });

    $numeros = [1, 2, 3, 4];
    $primerPar = null;
    foreach ($numeros as $numero) {
        if ($numero % 2 === 0) {
            $primerPar = $numero;
            break;
        }
    }

    $numeros = [1, 2, 3, 4];
    $indicePrimerPar = null;
    foreach ($numeros as $indice => $numero) {
        if ($numero % 2 === 0) {
             $indicePrimerPar = $indice;
            break;
         }
    }

    $numeros = [1, 2, 3, 4];
    $suma = array_reduce($numeros, function($acumulador, $numero) {
        return $acumulador + $numero;
    }, 0);

    $numeros = [1, 2, 3, 4];
    $duplicados = array_map(function($numero) {
        return $numero * 2;
    }, $numeros);

 
?>