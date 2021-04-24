<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações de Atribuição</title>
</head>
<body>
    <h1>
        <?php
            //Operações de Atribuição
            $b = 2;
            $c = 3;
            $soma = 1;
            //$soma = $soma + $b
            $soma += $b;
            echo $soma . "<br>";
 
            $aurl = $_GET['a'] ?? "NENHUM"; //operador de coalescência
            echo $aurl++ . " " . $aurl . "<br>"; //pos-incremento, usa a variavel antes depois incrementa
            echo ++$aurl . " " . $aurl; //pre-incremento, incrementa antes e usa a variavel depois


            //Variaveis Referencias
            echo "<br>";

            $n1 = 3;
            $n2 = $n1; //recebe valor de n1
            $n2 += 5; //adiciona 5
            echo $n1 . " "; //imprime 3
            echo $n2 . "<br>"; //imprime 8
                
            
            $l1 = 3;
            $l2 = &$l1; //os dois estão referenciados e ligados atraves do &
            $l2 += 5; //muda o valor de l2, e consequentemente o de l1
            echo $l1 . " "; //imprime 8
            echo ++$l2 . "<br>"; //imprime 9 (pre-incremento)


            //Variáveis de Variáveis
            $nome = "Gabriel"; // $nome = "Gabriel"
            $$nome = "Gostoso"; // $(Gabriel) = "Gostoso"
            echo $nome . " " . $Gabriel;
        ?>
    </h1>
</body>
</html>