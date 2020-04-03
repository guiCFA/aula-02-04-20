<?php


function divisao($valor1, $valor2){
  
    $maior= max($valor1,$valor2);
    $menor= min($valor1,$valor2);
    $resultado=0;
    
    if($menor > 0){
        for($i=$maior;$i >= $menor;$i=$i-$menor){
            $resultado = $resultado + 1;
        }
    }
    
    return $resultado;
}



