<?php

    $numbers = []; // <-- Ingrese el arreglo de numeros dentro de los corchetes
    if (!empty($numbers)) {
        print_r($numbers);
        echo "<br><br>";
        sort($numbers);
        $uniocos=array_unique($numbers);
        sort($uniocos);
        $longitud = count($uniocos);
        $MatrizFinal=array();

        for ($i = 0; ; $i++) {
            if ($i > ($longitud-1)) {
                break;
            }
            $posicion = $uniocos[$i];
            $resultado=array_sum(array_diff($numbers,array($uniocos[$i])));
            $MatrizFinal[$posicion]=$resultado;
            echo "•	Para ".$posicion." , La suma es ".$resultado.".<br>";
        } 

        krsort($MatrizFinal);
        $minimo = min($MatrizFinal);
    
        echo "<br><br>";

        echo nl2br("Elemento máximo que produce la suma más pequeño es: ". array_search($minimo,$MatrizFinal)." \n con una suma total de: ".$minimo);
    } else echo "El arreglo esta vacio";
?>