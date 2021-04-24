<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Funções String </title>
</head>
<body>
    <h2>
        <?php
            function q() {
                echo "<br>";
            }

            $nomemaiusculo = "GABRIEL";
            echo strtolower($nomemaiusculo); // coloca a string inteira em minúsculo
            q();
            q();


            $nomeminusculo = "gabriel";
            echo strtoupper($nomeminusculo); // coloca a string inteira em minúsculo
            q();
            q();


            $nomeminusculo = "gabRiel guilHerme";
            echo ucfirst($nomeminusculo); //coloca a primeira letra da primeira palavra em maiusculo
            q();
            q();


            echo ucwords($nomeminusculo); //coloca a primeira letra de cada palavra em maiusculo
            q();
            q();


            echo strrev($nomeminusculo); //mostra o texto ao contrário
            q();
            q();


            echo $nomeminusculo . " => Posição de \"guilHerme\" = " . strpos($nomeminusculo, "guilHerme"); //retorna o indice do inicio da palavra
            q();
            q();


            echo $nomeminusculo . " => Posição de \"guilHerme\" = " . stripos($nomeminusculo, "GUILHERME"); //ignora a caixa alta
            q();
            q();


            $frase = "Estou aprendendo PHP no curso de PHP";
            echo "Encontrado \"PHP\" " . substr_count($frase ,"PHP") . " vezes"; //retorna a quantidade de vezes que o string apareceu no texto
            q();
            q();


            $nomecompleto = "Gabriel Guilherme";
            $c1 = substr($nomecompleto, 0, 7); //Gabriel
            $c2 = substr($nomecompleto, 8); //Guilherme
            $c3 = substr($nomecompleto, -11); //l Guilherme
            $c4 = substr($nomecompleto, -9, 2); //Gu
            echo $c1;
            q();
            echo $c2;
            q();
            echo $c3;
            q();
            echo $c4;
            q();
            q();


            $primeironome = "Gabriel";
            echo str_pad($primeironome, 15, ".", STR_PAD_RIGHT); // (variavel, caracteres, preenchimento, forma de preencher) preenche a direita
            q();
            echo str_pad($primeironome, 15, ".", STR_PAD_LEFT); // (variavel, caracteres, preenchimento, forma de preencher) preenche a esquerda
            q();
            echo str_pad($primeironome, 15, ".", STR_PAD_BOTH); // (variavel, caracteres, preenchimento, forma de preencher) preenche uniforme nos lados
            q();
            q();


            $txt = "Php";
            echo str_repeat($txt, 5); //PhpPhpPhpPhpPhp escreve 5 vezes
            q();
            q();


            $estudo = "Gosto de estudar Matematica"; //troca todas as trings iguais
            echo str_replace("Matematica", "PHP", $estudo); //troca o matemática (escrito identico) pelo PHP 
            q();
            echo str_ireplace("MATEMATICA", "JavaScript", $estudo); //ignora caixa alta 

        ?>
    </h2>
</body>
</html>