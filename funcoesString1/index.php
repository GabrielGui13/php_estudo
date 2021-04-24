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

            
            $a = 13500.345786;
            //echo number_format($a, 2); forma antiga
            printf("O produto custa R$%.2f", $a); //O produto custa R$13500.35
            q();
            q();


            $s1 = [1, 2, 3];
            print_r($s1); // Array ( [0] => 1 [1] => 2 [2] => 3 )
            q();
            var_dump($s1); // array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
            q();
            var_export($s1); // array ( 0 => 1, 1 => 2, 2 => 3, )
            q();
            q();


            $gig = "Nessa aula, veremos uma lista de funções para Strings usando PHP. São funções internas que já existem na linguagem.";
            echo wordwrap($gig, 25, "<br>\n", false); //quebra de linha em 25 caracteres, "\n" quebra no codigo fonte, false quebra por palavra
            q();
            q();


            $txt = "Gabriel Gostosão";
            echo strlen($txt) . " "; //17, pois conta o acento como outro caractere
            echo mb_strlen($txt); //16, pois formata normalmente
            q();
            q();


            $nome = "   Gabriel Guilherme   "; //texto mal escrito com espaços
            echo mb_strlen($nome) . " "; //23 pois conta os espaços desnecessários
            echo mb_strlen(trim($nome)) . " "; //17 pois o trim() retira os espaços desnecessários e mantém os do meio
            echo mb_strlen(ltrim($nome)) . " "; //20 pois o ltrim() retira os espaços desnecessários a esquerda
            echo mb_strlen(rtrim($nome)); //20 pois o trim() retira os espaços desnecessários a direita
            q();
            q();


            $aviao = "Gabriel vai viajar de avião"; //5 palavras
            echo str_word_count($aviao, 0) . " "; //diz que são 6 palavras devido o acento (0 = conta palavras)
            print_r(str_word_count($aviao, 1)); //aqui prova a teoria (1 = vetor de palavras)
            q();
            echo str_word_count($aviao, 0, "ã") . " "; //retorna 5, pois disse que "ã" é um caractere e não separa 
            print_r(str_word_count($aviao, 1, "ã"));
            q();
            q();


            $nomecompleto = "Gabriel Guilherme Carvalho Viana";
            $vetornomecompleto = explode(" ", $nomecompleto); //cria uma array separando o texto pelo parametro " "
            print_r($vetornomecompleto); 
            q();
            q();


            $primeironome = "Gabriel";
            print_r(str_split($primeironome)); //cria uma array com cada letra indexada
            echo $primeironome[0]; //funciona do mesmo jeito
            echo $primeironome[1];
            echo $primeironome[2];
            q();
            q();


            $imprimirvetor = implode("#", $vetornomecompleto); //junta as palavras do vetor e coloca # entre os espaços
            $number = join("#", [1, 2, 3]); //tambem funciona com numeros (join() é exatamente a mesma coisa)
            echo $imprimirvetor;
            echo $number;
            q();
            q();


            $letra = chr(103); //resgata o caractere com o número da tabela ASCII
            echo "A letra da posição 103 é " . strtoupper($letra); //letra em minusculo, ao usar o strtoupper() é outro valor
            q();
            q();


            $codigoletra = "A";
            echo ord($codigoletra); //65, codigo da letra e maiusculo

        ?>
    </h2>
</body>
</html>