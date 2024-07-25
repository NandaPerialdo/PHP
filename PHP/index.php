<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <h1> Cálculos <h1>
    <form method="POST">
        <?php
            include 'funcoes.php'; //conectando com o arquivo com as funcoes
        ?>
        <label>Primeiro Número: </label>
        <input type="number" id="num1" name="num1"/><br>

        <label>Segundo Número: </label>
        <input type="number" id="num2" name="num2"/><br>

        <label>Insira sua idade: </label>
        <input type="number" id="idade" name="idade"/><br>

        <label>Insira um número: </label>
        <input type="number" id="num" name="num"/><br>

        <label>Insira uma temperatura: </label>
        <input type="number" id="temp" name="temp"/><br>

        <label>1° numero: </label>
        <input type="number" id="n1" name="n1"/><br>

        <label>2° numero: </label>
        <input type="number" id="n2" name="n2"/><br>

        <label>3° numero: </label>
        <input type="number" id="n3" name="n3"/><br>

        <label>Insira uma palavra: </label>
        <input type="string" id="palavra" name="palavra"/><br>

        <label>Insira um dia: </label>
        <input type="number" id="dia" name="dia"/><br>

        <label>Insira um mês: </label>
        <input type="number" id="mes" name="mes"/><br>

        <label>Insira um ano: </label>
        <input type="number" id="ano" name="ano"/><br>

        <button> Calcular
            <?php
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $idade = $_POST['idade'];
                $num = $_POST['num'];
                $temp = $_POST['temp'];
                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                $n3 = $_POST['n3'];
                $palavra = $_POST['palavra'];
                $dia = $_POST['dia'];
                $mes = $_POST['mes'];
                $ano = $_POST['ano'];
            ?>
        </button><br><br>

        <textArea rows="100" cols="40" readOnly>
            <?php
                echo "\nSomar: ".somar($num1,$num2).
                "\nSubtrair: ".subtrair($num1,$num2).
                "\nDividir: ".dividir($num1,$num2).
                "\nMultiplicar: ".multiplicar($num1,$num2).
                "\nEscolher: ".escolher($num1).
                "\nDecimal -> Binario: ".converterBinario($num1).
                "\nDecimal -> Binario: ".converterBinario($num2).
                "\nPar ou Ímpar: ".parOuImpar($num1).
                "\nPar ou Ímpar: ".parOuImpar($num2).
                "\nVerificar Idade: ".verifIdade($idade).
                "\nDobro: ".dobro($num).
                "\nConverter Celsius Fahrenheit: ".celsiusParaFahrenheit($temp).
                "\nO maior número é: ".maiorDeTres($n1,$n2,$n3).
                "\nPositivo ou Negativo: ".verifPositivoNegativo($num).
                "\nA tabuada é: ".tabuada($num).
                "\nA soma até ".$num." é: ".somaAteEsseNum($num).
                #"\nÉ primo? ".verifPrimo($num).
                "\nPalindromo: ".verifPalindromo($palavra).
                #"\nO fatorial de ".$num." é: ".calcFatorial($num).
                "\nOs pares anteriores a".$num."são: ".exibirPares($num).
                #"\nA contagem de vogais é igual a".contarVogais($palavra).
                "\nA data é valida?".validarData($dia,$mes,$ano);

            ?>
        </textArea>
    </form>
</body>
</html>