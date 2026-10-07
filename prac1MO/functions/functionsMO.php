<?php  

    // even(pares), odd(impares), prime(primos), positive(postivo) , negativo (negative)
    function filterByType($num,$tipo){
        $result = [];
        foreach($num as $n){
            if($tipo == "even"){
                if($n % 2 == 0){
                    $result[]=$n;
                }
            }else if($tipo == "odd"){
                if($n % 2 !=0 ){
                    $result[] = $num;
                }
            }else if($tipo == "prime"){
                if(primo($n)){
                    $result[]=$num;
                }
            }else if($tipo == "positive"){
                if($n>0){
                    $result[]=$num;
                }
            }else if($tipo == "negative"){
                if($n<0){
                    $result[]=$num;
                }
            }
        }
        return $result;
        var_dump(filterByType($num,"positivo"));
    }
    

    //funcion que calcula si el numero es primo o no 
    function primo($num){
        if($num <2){
            return false;
        }
        for($i=2; $i<$num;$i++){
            if($num % $i == 0){
                return false;
            }
        }
        return true;
    }
    



?>