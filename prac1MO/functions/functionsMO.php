<?php

// even(pares), odd(impares), prime(primos), positive(postivo) , negativo (negative)
function filterByType($num, $tipo)
{
    $result = [];
    foreach ($num as $n) {
        if ($tipo == "even") {
            if ($n % 2 == 0) {
                $result[] = $n;
            }
        } else if ($tipo == "odd") {
            if ($n % 2 != 0) {
                $result[] = $n;
            }
        } else if ($tipo == "prime") {
            $esPrimo= true;
            if (primo($n)) {
                $result[] = $n;
            }
        } else if ($tipo == "positive") {
            if ($n > 0) {
                $result[] = $n;
            }
        } else if ($tipo == "negative") {
            if ($n < 0) {
                $result[] = $n;
            }
        }
    }
    return $result;

}


//funcion que calcula si el numero es primo o no 
function primo($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
$num = [7, 12, -3, 4, 5, -12];
var_dump(filterByType($num, "positive"));



function calculateStatistics(array $numeros): array
{
    $asociativo = [];
    $mediana = 0;
    $moda = 0;

    //media
    $media = array_sum($numeros) / count($numeros);

    //mediana
    sort($numeros);
    $posicion = intdiv(count($numeros), 2);
    if (count($numeros) % 2 == 0) {

        $mediana = ($numeros[$posicion] + $numeros[$posicion - 1] / 2);

    } else {
        $posicion = count($numeros) / 2;
        $mediana = $numeros[$posicion];
    }

    //moda

    $unicos = array_count_values($numeros);

    $maxRep = 0;
    foreach ($unicos as $unico => $repeticiones) {
        if ($repeticiones > $maxRep) {
            $maxRep = $repeticiones;
            $moda = $unico;
        }
    }
    $asociativo["media"] = $media;
    $asociativo["mediana"] = $mediana;
    $asociativo["moda"] = $moda;

    return $asociativo;


}
//prueba
$muestra = [3, 5, 6, 23, 46, 5, 73, 25, 6, 5, 3, 3, 65];
var_dump(calculateStatistics($muestra));

//analyzeWords
function analyzeWords($arr){
            $maximo = 0;
            $nuevo = 0;
            $larga = "";
            $cont = 0;
            $minimo = PHP_INT_MAX;
            $palabraCorta = "";

            foreach($arr as $ax){
              $nuevo = strlen($ax);
                if($nuevo > $maximo){
                    $maximo = $nuevo;
                    $larga = $ax;
                }
            }
                
            foreach($arr as $ax){
              $nuevo = strlen($ax); 
                if($nuevo < $minimo){
                    $minimo = $nuevo;
                    $palabraCorta = $ax;
                }
            }

            foreach($arr as $ax){
              $cont++;
            }

            return 
                [
                    "number_of_words" => $cont,
                    "longest_word" => $larga,
                     "shortest_word"=> $palabraCorta
                ];

    }
     $prueba = ["hola", "adios", "buenos", "z"];
            var_dump(analyzeWords($prueba));



?>