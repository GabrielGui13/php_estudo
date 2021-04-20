<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Variáveis e Operadores Aritméticos</title>
</head>
<?php
    $edson = "cabeção";
    $n1 = 2;
    $n2 = 3;
    $n3 = -1;
    $n4 = (int) -1;
    $n5 = (double) 2.5; //type-casting
?>
<body>
    <h1> 
        <?php 
            echo("Oi eu sou Edson e $edson") . "<br>";
            echo $n1 + $n2 . "<br>";

            $n1get = $_GET['a'];
            $n2get = $_GET['b'];
            //Formas de pegar valores na url "?a=3&b=8" <= apos o index.php

            echo "<a> Valores recebidos = $n1get e $n2get </a> <br>";    

            echo $n1get + $n2get . "<br>";

            echo "O valor de $n2 <sup>2</sup> é " . pow($n2, 2) . "<br>";
            echo "O valor absoluto de $n3 é " . abs($n3) . "<br>";
            echo "A raiz de 144 é " . sqrt(144) . "<br>";
            echo "O arredondamento de 3.3 é " . round(3.3) . "<br>";
            echo "O arredondamento de 3.2 para cima é " . ceil(3.3) . "<br>";
            echo "O arredondamento de 3.8 para baixo é " . floor(3.3) . "<br>";
            echo "O valor inteiro de 3.550 é " . intval(3.3) . "<br>";
            echo "O valor em moeda de 8.000 é R$" . number_format(8000, 2, ",", ".") . "<br>"; //number_format(valor, zeros, separação dos zeros, formatar milhar)
        ?>
    </h1>
</body>
</html>
