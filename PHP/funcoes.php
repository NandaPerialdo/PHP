<?php

$num1 = 0;
$num2 = 3;

Function somar ($num1,$num2){
    return $num1 + $num2;
}//fim do somar

function subtrair ($num1,$num2){
    return $num1 - $num2;
}//fim do subtrair

function multiplicar ($num1,$num2){
    return $num1 * $num2;
}//fim do multiplicar

function dividir($num1,$num2){
    if ($num2 <= 0){
        return "Impossivel dividir por zero";
    }else{
        return $num1 / $num2;
    }  
}//fim do dividir

function escolher ($num1){
    switch($num1){
        case 1: 
            return "Rosa";
            break;
        case 2:
            return "Preto";
        case 3:
            return "White";
            break;
        default:
            return "Cor nao identificada";
            break;
    }//fim do switch
}//fim do escolher

function converterBinario ($decimal){
    $binario = "";
    while ($decimal >= 1){
        $binario .= $decimal % 2;
        $decimal = $decimal / 2;
    }//fim do while

    return strrev ($binario);
}//fim do converter

function converterDecimal ($binario){
    $tamanho = strlen ($binario);
    $j = $tamanho - 1;
    $i = 0;
    $decimal = 0;
    while($i < $tamanho){
        if(substr($binario,$i,1) == "1"){
            $decimal += pow(2,$j);
        }
        $j--;
        $i++;
    }
    return $decimal;
}

function parOuImpar($num1){
    $calc = 0;

    $calc = $num1 % 2;
        if ($calc > 0){
            return $num1." é ímpar";
        }else{
            return $num1." é par";
        }
}

function verifIdade($num1){
    if ($num1 >= 18){
        return "Você é MAIOR de idade";
    }else
        return "Você é MENOR de idade";
}

function dobro($num){
    return $num * 2;
}

function celsiusParaFahrenheit($temperatura){

    $F = 1.8 * $temperatura + 32;

    return $F;
}

function maiorDeTres($num1,$num2,$num3){
    $maior = $num1;

    if ($num2 > $maior){
        $maior = $num;
        if ($num3 > $maior){
            $maior = $num3;
        }
    }

    return $maior;
}

function verifPositivoNegativo($num){
    if ($num = 0){
        echo "Você digitou zero";
        if ($num < 0){
            echo "O número digitado é negativo";
        }else{
            echo "O número digitado é positivo";
        }
    }
}


/*
//imprimir os dados na tela
echo "<br>A soma dos numeros é: ".somar(5,6);
echo "<br>A subtração dos numeros é: ".subtrair(5,6);
echo "<br>A multiplicação dos numeros é: ".multiplicar(5,6);
echo "<br>A divisao dos numeros é: ".dividir(5,6);
echo "<br>A escolha é: ".escolher(2);
echo "<br>A conversão corresponde a: ".converterBinario(10);
echo "<br>Decimal: ".converterDecimal(1010);
*/
?>